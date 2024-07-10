<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cargo',
        'imagen',
        'texto',
    ];

    public function inicio()
    {
        return $this->belongsTo(Inicio::class);
    }
}
