<?php

namespace App\Models;

use App\Models\Model as ModelsModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourable');
    }

    //Relacion morfologica uno a muchos
    public function slidable()
    {
        return $this->morphTo();
    }

    public function model()
    {
        return $this->belongsTo(ModelsModel::class);
    }
}
