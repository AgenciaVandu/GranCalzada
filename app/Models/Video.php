<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos morfologica
    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourable');
    }
}
