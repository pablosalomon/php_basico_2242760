<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artista extends Model
{
    //vincular modelo a tabla
    protected $table="artist";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "ArtistId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //definir relacion entre artista 1 - M albumes

    public function discos(){
        //hasmany: parametros
        //1. modelo a relacionar
        //2. FK del modelo papa
        //3. pk del modelo hijo
        return $this->hasMany ('App\Disco', 'ArtistId');
    }

    //definir relacion de multitabla entre
    //artista y sus cacniones

    public function canciones(){
        //hasManyThrough: parametros:
        //1. modelo nieto
        //2. modelo papa
        //3. FK del abuelo en el papa
        //4. FK del papa en el nieto
        //5. clave primaria del abuelo
        //6. PK del papa
        return $this->hasManyThrough('App\Cancion','App\Disco', 'ArtistId', 'AlbumId', 'ArtistId', 'AlbumId');
    }

}
