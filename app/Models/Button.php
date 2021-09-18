<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a uno inversa
    public function development()
    {
        return $this->belongsTo(Development::class);
    }
}