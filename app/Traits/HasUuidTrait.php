<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUuidTrait
{
    /**
      * Boot function from Laravel.
      */
    protected static function bootHasUuidTrait()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid()->toString();
            }
        });
    }
}
