<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //vincular modelo a tabla
    protected $table="invoice";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "InvoiceId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion m a m entre factura y canciones
    public function canciones (){
        //relacion mm: belongsToMany
        //parametros: 1. modelo a relacionar
        //2. La tabla pivote
        //3. fk del presente modelo en la tabla pivot
        //4. fk del modelo relacionado en la tabla pivote
        return $this->belongsToMany('App\Cancion', 'InvoiceLine', 'InvoiceId', 'TrackId');
    }

}
