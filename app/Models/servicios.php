<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "imagen",
        "nombreModal",
        "imagenModal",
        "textoModal",
    ];
    public function inicio()
    {
        return $this->belongsTo(Inicio::class);
    }
}
