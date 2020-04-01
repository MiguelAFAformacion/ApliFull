<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //Definimos la relación 1:N entre la tabla grupo y la tabla discos
    public function discografia() {
    	return $this->hasMany('App\Disco');
    }


    //Usamos esta función llamada Accesador (es un helper de Laravel) para mostrar un valor booleano más correcto
   	public function getActivoAttribute($value)
    {
        return $value ? 'Siguen en activo' : 'Ya no están en activo';
    }
}
