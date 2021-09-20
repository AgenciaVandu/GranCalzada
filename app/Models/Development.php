<?php

namespace App\Models;

use App\Models\Model as ModelsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos
    public function sliders()
    {
        return $this->morphMany(Slider::class, 'slidable');
    }

    //Relacion uno a muchos
    public function models()
    {
        return $this->hasMany(ModelsModel::class);
    }
    //Relacion uno a uno
    public function button()
    {
        return $this->hasOne(Button::class);
    }

    public function lots()
    {
        return $this->hasManyThrough(Lot::class, ModelsModel::class);
    }
}
