<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
     //vincular modelo a tabla
     protected $table="employee";
     //establecer la clave primaria para la entidad (por defecto: id)
     protected $primaryKey = "EmployeeId";
     //Omitir campos de auditoria
     public $timestamps = false;

     //relacion 1 a M Cliente
     public function clientes(){
         return $this->hasMany('App\Cliente', 'SupportRepId');
     }

     //relacion 1 a m facturas (a traves del cliente)
    public function facturas (){
        return $this->hasManyThrough('App\Factura', 'App\Cliente', 'SupportRepId', 'CustomerId', 'EmployeeId', 'CustomerId');
        }
}
