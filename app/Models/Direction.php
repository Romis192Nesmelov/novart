<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable = [
        'name',
        'icon',
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
