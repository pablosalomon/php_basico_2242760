<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    //vincular modelo a tabla
    protected $table="album";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "AlbumId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //inverso de la relacion muchos a 1
    public function artista(){
        //belongsTo: realcion m a 1
        return $this->belongsTo('App\Artista', 'ArtistId');
    }
}
