<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos
    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }
    //Relacion uno a uno
    public function button()
    {
        return $this->hasOne(Button::class);
    }
}
