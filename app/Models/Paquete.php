<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'detalles',
        'precio',
        'cantidad_de_niños',
        'cantidad_de_adultos',
        'imagen',
    ];

    public function imagenes()
    {
        return $this->hasMany(Paquete_Img::class, 'paquete_id');
    }

}
