<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'active',
    ];

    /**
     * Get the inscriptions for the event.
     */
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }


    public static function search($filter = null)
    {
        if (!$filter) {
            return self::paginate(10);
        }

        return self::where('name', 'LIKE', "%$filter%")
        ->paginate(10);
    }
}
