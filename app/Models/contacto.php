<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','email','telefono','asunto','mensaje'];
    public function inicio()
    {
        return $this->belongsTo(Inicio::class);
    }
}
