<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paquete_Img extends Model
{
    protected $table = 'paquetes_img';
    use HasFactory;

    protected $fillable = [
        'paquete_id',
        'nombre_paquete',
        'imagen',
    ];
    public function paquete()
    {
        return $this->belongsTo(Paquete::class, 'paquete_id');
    }
}
