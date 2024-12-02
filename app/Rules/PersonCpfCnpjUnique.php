<?php

namespace App\Rules;

use App\Helpers\AppHelper;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PersonCpfCnpjUnique implements ValidationRule
{
    private $id;
    private string $customAttribute;

    /**
     * Create a new rule instance.
     *
     * @param string $table
     * @param string $column
     * @param $columnValue
     */
    public function __construct($id = null, $customAttribute = '')
    {
        $this->id = $id;
        $this->customAttribute = $customAttribute;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = AppHelper::onlyNumbers($value);
        $withSoftDelete = Schema::hasColumn('persons', 'deleted_at');

        $result = DB::table('persons')
            ->where('cpf_cnpj', $value)
            ->where(function ($query) use ($withSoftDelete) {
                if ($withSoftDelete) {
                    $query->whereNull('deleted_at');
                }
            })
            ->first();

        // return true when editing same register
        if (!is_null($result) and $result->id != $this->id) {
            if ($this->customAttribute) {
                $fail("Este $this->customAttribute já está cadastrado.");
            } else {
                $fail('Este :attribute já está cadastrado.');
            }
        }
    }
}
