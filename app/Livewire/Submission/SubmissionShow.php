<?php

namespace App\Livewire\Submission;

use App\Livewire\Forms\SubmissionForm;
use App\Models\Avaliation;
use App\Models\Submission;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class SubmissionShow extends Component
{
    use AuthorizesRequests;

    public SubmissionForm $form;

    public $status;

    public function mount(?string $id = null): void
    {
        $this->authorize('write_submissions');
        $this->form->init($id);

        $this->form->object = $id ? Submission::find($id) : new Submission();

        if (!empty($id)) {
            $object = Submission::find($id);

            if ($object) {
                $this->form->setObject($object);
                $this->status = $object->status;
                $this->avaliations = Avaliation::all()->pluck('name', 'id')->toArray();
            }
        }
    }
    public function render()
    {

        return view('livewire.submission.submission-show', ['object' => $this->form->object]);
    }

}
