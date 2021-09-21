<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourable');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
