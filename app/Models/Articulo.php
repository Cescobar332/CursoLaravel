<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable=[
        "Nombre_Articulo",
        "Precio",
        "pais_origen",
        "observaciones",
        "seccion"
    ];

    public function cliente(){
        return $this->belongsTo("App\Models\Cliente");
    }
    public function calificaciones(){
        return $this->morphMany("App\Models\Calificaciones", "calificacion");
    }
}
