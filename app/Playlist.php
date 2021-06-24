<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //vincular modelo a tabla
    protected $table="playlist";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "PlaylistId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion MM (playlist y cancion)
    public function canciones(){
        //metodo: belongsToMany, parametros:
        //1. modelo destino
        //2. tabla pivote
        //3. fk tabla origen
        //4. fk tabla destino
        return $this->belongsToMany('App\Cancion','playlisttrack', 'PlaylistId', 'TrackId');
    }
}
