<?php

namespace App\Http\Controllers\Select;

use App\Http\Controllers\Controller;
use App\Models\Person\Person;
use Illuminate\Http\Request;

class PersonSelectController extends Controller
{
    public function search(Request $request)
    {
        $search      = strtolower($request->search ?? '');
        $id          = $request->id        ?? null;
        $attributeId = $request->attribute ?? null;

        $persons = Person::query()
            ->select('persons.*')
            ->join('attribute_person as ap', 'ap.person_id', 'persons.id')
            ->where(function ($query) use ($id, $attributeId) {
                if ($id) {
                    $query->where('persons.id', $id);
                }

                if ($attributeId) {
                    $query->where('ap.attribute_id', $attributeId);
                }
            })
            ->where(function ($query) use ($search) {
                if ($search) {
                    $query->WhereRaw('LOWER(name) like ?', ["%{$search}%"]);
                    $query->orWhereRaw('LOWER(alias) like ?', ["%{$search}%"]);
                    $query->orWhereRaw('LOWER(cpf_cnpj) like ?', ["%{$search}%"]);
                }
            })
            ->get()
            ->map(function ($item, $key) {
                $item->value = $item->id;
                $item->text  = $item->name . " ({$item->cpf_cnpj})";

                return $item;
            });

        return $persons;
    }
}
