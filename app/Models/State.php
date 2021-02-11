<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'abbr',
    ];

    /**
     * Get all of the cities for the state.
     */
    public function city()
    {
        return $this->hasMany(City::class);
    }

}
