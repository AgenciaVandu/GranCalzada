<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function development()
    {
        return $this->belongsTo(Development::class);
    }

    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourable');
    }
}
