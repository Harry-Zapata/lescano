<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class inicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'navbar',
        'titulo',
        'keywords',
        'description',
        'icon',
        'Textologo',
        'tituloSlider1',
        'textoSlider1',
        'imgSlider1',
        'tituloSlider2',
        'textoSlider2',
        'imgSlider2',
        'tituloSlider3',
        'textoSlider3',
        'imgSlider3',
        'imgNosotros',
        'TituloNosotros',
        'textoNosotros',
        'descripcionNosotros',
        'modalTituloNosotros',
        'modalImgNosotros',
        'modalTextoNosotros',
        'TextoGaleria',
    ];

    /**
     * Get the servicios associated with the inicio.
     */

    public function servicios()
    {
        return $this->hasMany(Servicios::class);
    }
}
