<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'pregunta',
        'respuesta1',
        'respuesta2',
        'respuesta3',
        'respuesta4',
    ];
    public function inicio()
    {
        return $this->belongsTo(Inicio::class);
    }
}
