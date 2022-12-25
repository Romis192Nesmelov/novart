<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'name',
        'description',
        'preview',
        'full',
        'direction_id'
    ];

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }
}
