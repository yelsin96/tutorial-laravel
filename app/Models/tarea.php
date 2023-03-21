<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tarea extends Model
{
    use HasFactory;
    use SoftDeletes; // si se creo softdeletes en sql

    protected $table = 'tarea'; //si la tabla se llama diferente, sino no es necesario

    protected $fillable = [
        'nombre',
        'descripcion',
        'finalizada',
        'fecha_limite',
        'urgencia'
    ];
    protected $dates = ['fecha_limite']; // para manipular facilmente fechas
    
    public const URGENCIAS = ['Baja','Normal','Alta'];

    public function urgencia(){
        return self::URGENCIAS[$this->urgencia];
    }

    public function estaFinalzida(){
        return $this->finalizada == 1 ? 'Si' : 'No';
    }
}
