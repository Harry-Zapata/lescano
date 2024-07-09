<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre",
        "puesto",
        "texto",
        "imagen",
        'twitter',
        'facebook',
        'instagram',
    ];
    public function inicio()
    {
        return $this->belongsTo(Inicio::class);
    }
}
