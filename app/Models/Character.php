<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'bio',
        'attack',
        'defence',
        'speed',
        'hp',
        'type_id'
    ];

    // protected $guarded = ['items'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}
