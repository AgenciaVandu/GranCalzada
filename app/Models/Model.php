<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as ModelEloquent;

class Model extends ModelEloquent
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function development()
    {
        return $this->belongsTo(Development::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    //Relacion uno a muchos
    public function sliders()
    {
        return $this->morphMany(Slider::class, 'slidable');
    }

    //Relacion uno a muchos
    public function image()
    {
        return $this->morphMany(Resource::class, 'resourable');
    }


    public function getRouteKeyName()
    {
        return 'name';
    }
}
