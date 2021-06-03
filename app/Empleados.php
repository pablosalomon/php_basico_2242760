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
}
