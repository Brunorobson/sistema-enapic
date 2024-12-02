<?php

namespace App\Livewire\Forms;

use App\Models\{Avaliation, Submission, User};
use App\Models\{AvaliationItem, Criteria};
use Illuminate\Validation\Rule;
use Livewire\Form;

class AvaliationForm extends Form
{
    public ?Avaliation $object;

    public ?string $user_id = null;

    public ?string $user_name = null;

    public ?string $submission_id = null;

    public ?string $submission_title = null;

    public string $total = '';

    public mixed $file = null;

    public mixed $file_new = null;

    public ?string $comment = null;

    public ?string $status = null;

    public array $items = [];

    public array $statusOptions = [];

    public ?array $criterias = [];

    public ?int $average = 0;

    public function rules()
    {
        return [
            'user_id'       => ['required'],
            'submission_id' => ['required'],
            'items'         => [
                Rule::requiredIf($this->status != 'EA'),
            ],
            'items.*' => [
                'integer',
                'min:0',
                'max:5',
            ],
        ];
    }

    public function validationAttributes()
    {
        return [
            'user_id'       => 'avaliador',
            'submission_id' => 'submissão',
            'items'         => 'notas',
            'items.*'       => 'nota',
        ];
    }

    public function messages()
    {
        return [
            'items.required' => 'Ao alterar o status as notas são obrigatórias.',
        ];
    }

    public function init(?string $id = null): void
    {
        $this->statusOptions = Avaliation::getStatus();

        if ($id) {
            $avaliation = Avaliation::query()->with(['submission', 'user'])->find($id);

            if ($avaliation) {
                $this->setObject($avaliation);
                $submission             = $avaliation->submission;
                $this->criterias = Criteria::where('axle_id', $submission->axle_id)->get()->toArray();
                $this->submission_title = $submission->title;
                $this->user_name        = $avaliation->user->name;
            }

        }
    }

    public function setObject(Avaliation $object)
    {
        $this->object        = $object;
        $this->user_id       = $object->user_id;
        $this->submission_id = $object->submission_id;
        $this->total         = $object->total;
        $this->comment       = $object->comment;

        $submission = Submission::find($object->submission_id);

        if ($submission) {
            $this->status   = $object->status;
            $this->file     = $submission->file;
            $this->file_new = $submission->file_new;
        }

        foreach ($object->items as $item) {
            $this->items[$item->criteria_id] = $item->value;
        }

        $this->average = Avaliation::calculateAverage($object->submission_id);
    }

    public function store()
    {
        $data = $this->validate();

        $submission = Submission::findOrFail($this->submission_id);

        if ($this->status) {
            $submission->status = $this->status;
        }
        $submission->save();

        $data['submission_id'] = $this->submission_id;
        $data['user_id']       = $this->user_id ?? auth()->id();
        $data['comment']       = $this->comment;
        $data['status']        = $this->status;

        $items = [];
        $total = 0;

        foreach ($this->items as $criteriaId => $value) {
            $items[] = ['avaliation_id' => $this->object->id, 'criteria_id' => $criteriaId, 'value' => $value];
            $total += $value;
        }
        $data['total'] = $total;

        if (empty($this->object->id)) {
            $this->object = Avaliation::create($data);
        } else {
            $this->object->update($data);
        }

        // Atualiza ou cria os itens de avaliação
        if ($items) {

            AvaliationItem::upsert($items, uniqueBy: ['criteria_id'], update: ['value']);
        }

        $submission->atualizarStatus();

        $this->reset();
    }

}
