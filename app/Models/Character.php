<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'level',
    //     'bio',
    //     'defence',
    //     'speed',
    //     'hp'
    // ];

    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
