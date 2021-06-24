<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //vincular modelo a tabla
    protected $table="customer";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "CustomerId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre cliente y facturas
    public function facturas (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Factura', 'CustomerId');
    }


}
