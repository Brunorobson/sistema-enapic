<?php

namespace App\Livewire\Forms;

use App\Helpers\AppHelper;
use App\Models\Freight\Freight;
use App\Models\Freight\ProductType;
use App\Models\Freight\VehicleType;
use App\Models\Location\State;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class FreightForm extends Form
{
    public ?Freight $object;

    #[Validate('required', as: 'empresa')]
    public ?int $person_id = 0;

    #[Validate('required', as: 'cidade origem')]
    public ?int $start_city_id = null;

    #[Validate('required', as: 'estado Origem')]
    public ?int $start_state_id = null;

    #[Validate('required', as: 'cidade destino')]
    public ?int $goal_city_id = null;

    #[Validate('required', as: 'estado destino')]
    public ?int $goal_state_id = null;

    #[Validate('required', as: 'distância')]
    public ?string $distance = null;

    #[Validate('required', as: 'peso')]
    public ?string $weight = null;

    #[Validate('required', as: 'valor')]
    public ?string $value = null;

    #[Validate('required', as: 'tipo de veículo')]
    public ?int $vehicle_type_id = null;

    #[Validate('required', as: 'tipo de produto')]
    public ?int $product_type_id = null;

    #[Validate('required', as: 'rastreador')]
    public bool $tracker = false;

    #[Validate('required', as: 'pedágio')]
    public bool $toll = false;

    #[Validate('nullable')]
    public ?string $latitude = '';

    #[Validate('nullable')]
    public ?string $longitude = '';

    #[Validate('nullable')]
    public ?string $note = '';

    #[Validate('nullable')]
    public ?string $finished_at = null;

    public string $status = 'A'; // Ativo

    public $states       = [];
    public $startCities  = [];
    public $goalCities   = [];
    public $vehicleTypes = [];
    public $productTypes = [];

    public function init(?string $uuid = null): void
    {
        $this->states       = State::all()->pluck('uf', 'id')->toArray();
        $this->vehicleTypes = VehicleType::all()->pluck('title', 'id')->toArray();
        $this->productTypes = ProductType::all()->pluck('title', 'id')->toArray();
    }

    public function setObject(Freight $object)
    {
        $this->object = $object;

        $this->person_id       = $object->person_id;
        $this->start_city_id   = $object->start_city_id;
        $this->start_state_id  = $object->start_state_id;
        $this->goal_city_id    = $object->goal_city_id;
        $this->goal_state_id   = $object->goal_state_id;
        $this->distance        = AppHelper::formatCurrency($object->distance);
        $this->weight          = AppHelper::formatCurrency($object->weight);
        $this->value           = AppHelper::formatCurrency($object->value);
        $this->vehicle_type_id = $object->vehicle_type_id;
        $this->product_type_id = $object->product_type_id;
        $this->tracker         = $object->tracker;
        $this->toll            = $object->toll;
        $this->latitude        = $object->latitude;
        $this->longitude       = $object->longitude;
        $this->note            = $object->note;
        $this->finished_at     = $object->finished_at;
        $this->status          = $object->status;
    }

    public function store()
    {
        $data = $this->validate();
        if (empty($this->object->id)) {
            $data = $this->validate();

            $user             = Auth::user();
            $data['distance'] = AppHelper::formatDouble($data['distance']);
            $data['weight']   = AppHelper::formatDouble($data['weight']);
            $data['value']    = AppHelper::formatDouble($data['value']);
            $data['user_id']  = $user->id;
            $data['status']   = 'A';
            $this->object     = Freight::create($data);
        } else {
            $data = $this->validate();
            // dd($data);
            $data['distance'] = AppHelper::formatDouble($data['distance']);
            $data['weight']   = AppHelper::formatDouble($data['weight']);
            $data['value']    = AppHelper::formatDouble($data['value']);
            $data['status']   = 'A';
            // dd($data);
            $this->object->update($data);
        }
    }
}
