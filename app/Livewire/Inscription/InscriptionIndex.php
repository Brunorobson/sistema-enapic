<?php

namespace App\Livewire\Inscription;

use App\Models\Inscription;
use App\Models\User;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Spatie\Permission\PermissionRegistrar;

class InscriptionIndex extends Component
{
    use AuthorizesRequests;
    public bool $showModalDelete = false;
    public $object;

    public bool $showModalEvaluator = false;
    public int $deleteId;

    public array $searchOptions = [];

    public array $getStatus = [];

    #[Url]
    public string $filter = '';

    public function mount()
    {
        $this->authorize('read_inscriptions');

        $this->getStatus = Inscription::getStatus();
    }

    public function toConfirmEvaluator($id)
    {
        $this->object = Inscription::find($id);

        if ($this->object) {
            $this->showModalEvaluator = true;
        } else {
            return redirect()->route('home/index')
                ->with('title', 'error')
                ->with('status', 'Inscrição não encontrada!');
        }
    }

    public function confirmEvaluator()
    {

        if ($this->object) {
            $this->object->status = 'I';
            $this->object->save();

            $user = $this->object->user;

            if ($user) {
                $user->roles()->sync([4]);
                User::forgetCache($user->id);
            }
            $this->showModalEvaluator = false;
            return redirect()->route('dashboard/inscriptions')
                ->with('title', 'Sucesso')
                ->with('status', 'Usuário agora é um Avaliador!');
        } else {
            return redirect()->route('dashboard/inscriptions')
                ->with('title', 'error')
                ->with('status', 'Inscrição não encontrada!');
        }
    }


    public function toConfirmInscription($id)
    {


        $this->object = Inscription::query()->find($id);

        if ($this->object) {
            $user = $this->object->user;

            if ($user) {
                $user->roles()->sync([5]);
                User::forgetCache($user->id);
            }
            $this->object->status = 'I';
            $this->object->save();
            return redirect()->route('dashboard/inscriptions')
                ->with('title', 'Sucesso')
                ->with('status', 'A Inscrição foi confirmada!');
        } else {
            return redirect()->route('dashboard/inscriptions')
                ->with('title', 'error')
                ->with('status', 'Inscrição não encontrada!');
        }
    }

    public function render()
    {
        $objects = Inscription::paginate();

        return view('livewire.inscription.inscription-index', ['objects' => $objects]);
    }

    public function updatingFilter(): void
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->searchOptions = [];
    }
}