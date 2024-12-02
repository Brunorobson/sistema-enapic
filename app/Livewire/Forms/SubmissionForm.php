<?php

namespace App\Livewire\Forms;

use App\Models\{Avaliation, AvaliationItem, Axle, Event, Submission, User};
use Livewire\Attributes\Validate;
use Livewire\{Form, WithFileUploads};
use Illuminate\Validation\Rule;

class SubmissionForm extends Form
{
    use WithFileUploads;

    public ?Submission $object;

    #[Validate('required', as: 'Evento')]
    public ?string $event_id;

    #[Validate('required', as: 'Eixo')]
    public ?string $axle_id = null;

    #[Validate('required', as: 'Título')]
    public string $title = '';

    #[Validate('required', as: 'Resumo')]
    public ?string $resume = null;

    #[Validate('required', as: 'PDF')]
    public $file = null;

    public $file_new = null;

    #[Validate('required', as: 'Avaliadores')]
    public array $avaliation = [];

    public ?string $status = null;

    public array $selected_avaliations = [];

    public $events = [];

    public $axles = [];

    public array $statusOptions = [];

    public function rules()
    {
        return [
            'event_id' => ['required'], // Evento é obrigatório
            'axle_id' => ['required'], // Eixo é obrigatório
            'title' => ['required', 'string'],
            'resume' => ['required', 'string'],
            'file' => ['required_if:object.id,null', 'file', 'mimes:pdf'],
            'avaliation' => [
                'required',
                'array',
                Rule::exists('users', 'id')->where(function ($query) {
                    $query->whereHas('roles', function ($roleQuery) {
                        $roleQuery->where('role_id', 4); // Verificar se é um avaliador
                    });
                }),
            ],
        ];
    }

    public function validationAttributes()
    {
        return [
            'event_id' => 'evento',
            'axle_id' => 'eixo',
            'title' => 'título',
            'resume' => 'resumo',
            'file' => 'PDF',
            'avaliation' => 'avaliadores',
        ];
    }

    public function messages()
    {
        return [
            'event_id.required' => 'Selecione um evento.',
            'axle_id.required' => 'Selecione um eixo.',
            'file.required_if' => 'O arquivo PDF é obrigatório.',
            'avaliation.required' => 'Selecione pelo menos um avaliador.',
            'avaliation.exists' => 'Um ou mais avaliadores selecionados não são válidos.',
        ];
    }

    public function init(?string $id = null): void
    {
        $this->events = Event::all()->pluck('name', 'id')->toArray();
        $this->axles = Axle::all()->pluck('name', 'id')->toArray();
        $this->selected_avaliations = User::whereHas('roles', function ($query) {
            $query->where('role_id', 4);
        })
            ->get()
            ->pluck('name', 'id')
            ->toArray();
        $this->statusOptions = Submission::getStatus();

        if ($id) {
            $object = Submission::find($id);

            if ($object) {
                $this->setObject($object);
            }
        }
        $this->events = Event::all()->pluck('name', 'id')->toArray();
        if (!empty($this->events) && !$this->event_id) {
            $this->event_id = array_key_first($this->events);
        }

        $this->axles = Axle::all()->pluck('name', 'id')->toArray();
        if (!empty($this->axles) && !$this->axle_id) {
            $this->axle_id = array_key_first($this->axles);
        }
    }

    public function setObject(Submission $object)
    {
        $this->object = $object;
        $this->event_id = $object->event_id;
        $this->axle_id = $object->axle_id;
        $this->title = $object->title;
        $this->resume = $object->resume;
        $this->status = $object->status;
        $this->file = $object->file;
        $this->file_new = $object->file_new;

        // Carregar avaliadores já atribuídos à submissão
        $this->avaliation = $object->avaliations->pluck('user_id')->toArray();
    }

    public function store()
{
    $data = $this->validate();

    // Lógica para salvar arquivos
    if ($this->file && is_object($this->file)) {
        $data['file'] = $this->file->store('public/submissions');
    } elseif ($this->object->file) {
        $data['file'] = $this->object->file;
    }

    if ($this->file_new && is_object($this->file_new)) {
        $data['file_new'] = $this->file_new->store('public/submissions');
    } elseif ($this->object->file_new) {
        $data['file_new'] = $this->object->file_new;
    }

    // Salvando a submissão
    if (empty($this->object->id)) {
        $data['status'] = 'AA'; // Submissão nova
        $data['user_id'] = auth()->id();
        $submission = Submission::create($data);
    } else {
        if ($this->status) {
            $data['status'] = $this->status;
        }
        $submission = $this->object;
        $submission->update($data);
    }

    // Lógica para atualizar avaliadores e remover os avaliadores não avaliados
    if (!empty($this->avaliation)) {
        // Pega os IDs dos avaliadores existentes na submissão
        $existingAvaliators = $submission->avaliations()->pluck('user_id')->toArray();

        // Remove avaliadores que não estão na nova lista de avaliadores e que não avaliaram
        foreach ($existingAvaliators as $existingUserId) {
            if (!in_array($existingUserId, $this->avaliation)) {
                $avaliation = $submission->avaliations()->where('user_id', $existingUserId)->first();

                // Verifica se a avaliação ainda não foi feita (total == 0) e apaga
                if ($avaliation && $avaliation->total == 0) {
                    $avaliation->delete();
                }
            }
        }

        // Adiciona novos avaliadores, caso não existam
        foreach ($this->avaliation as $userId) {
            if (!in_array($userId, $existingAvaliators)) {
                $submission->avaliations()->create([
                    'user_id' => $userId,
                    'total' => 0, // Avaliação ainda não realizada
                ]);
            }
        }

        // Atualiza o status da submissão para 'Em Avaliação' se houver avaliadores
        if ($submission->avaliations()->count() === 0) {
            $submission->status = 'EA';
            $submission->save();
        }
    }

    // Muda o status apenas se for a primeira submissão e não houver avaliações
    if (empty($this->object->id) && $submission->avaliations()->count() === 0) {
        $submission->status = 'EA'; // Define o novo status
        $submission->save();
    }

    $this->reset();
}

}
