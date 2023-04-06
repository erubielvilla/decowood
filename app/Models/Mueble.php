<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    use HasFactory;
	public $timestamps = true;
    protected $fillable = [
        'tipo_mueble',
        'descripcion',
        'url'
    ];
}
