<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Http\Resources\PersonResource;
use App\Models\Person\Address;
use App\Models\Person\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    private $model;

    public function __construct(Person $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->bearerToken()) {
            $user = auth('sanctum')->user();
            if ($user) {
                $portfolios_ids = $user->portfolios->where('active', true)->pluck('id')->toArray();

                return PersonResource::collection($this->model->getAllByPortfolios($portfolios_ids));
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        $data = $request->all();

        $person = $this->model->create($data);

        $address             = new Address();
        $data['person_id']   = $person->id;
        $data['description'] = 'Principal';
        $address->create($data);

        if (isset($data['email'])) {
            $person->emails()->create(['description' => 'E-mail', 'address' => $data['email']]);
        }

        if (isset($data['phone'])) {
            $person->phones()->create(['description' => 'Celular', 'number' => $data['phone']]);
        }

        $resource = new PersonResource($person);

        return $resource->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $model = $this->model->getByUuid($uuid);
        if ($model) {
            return new PersonResource($model);
        }

        return response()->json(['error' => '404 Not Found'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, string $uuid)
    {
        $model = $this->model->getByUuid($uuid);
        if ($model) {
            $model->update($request->all());
            $model->address()->update($request->all());

            return new PersonResource($model);
        }

        return response()->json(['error' => '404 Not Found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
