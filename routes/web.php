<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//callback: funcion sin nombre que hace parte
//de los parametros de la invocacion de otra

Route:: get('variables', function(){
    //JAVA, .NET: fueremente tipados.
    //PHP, JAVASCRIPT, PYTHON: debilmente tipados.
    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = 'Pablo';
    var_dump($mensaje);
});

Route:: get("arreglos", function(){
    //Arreglos: Estructura de datos.
    $estudiantes = [ "AN" => "Ana"  , "MA" => "Maria"  , "JO" => "Jorge"  ];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
});


Route::get("paises", function(){

    $paises = [
            "COLOMBIA" =>[
                "capital" => "Bogotá",
                "moneda" => "Peso",
                "poblacion" => 50.34
            ],
            "PERÚ" => [
                "capital" => "Lima",
                "moneda" => "Sol",
                "poblacion" => 32.84
            ],
            "PARAGUAY" => [
                "capital" => "Asunción",
                "moneda" => "Guaraní",
                "poblacion" => 7.34
            ],
    ];

    //invocar la vista
    //llevando los datos a ella
    return view("paises")->with("Naciones", $paises);


});

Route::get('formulario_buscador', "MetabuscadorController@formulario_buscador");
Route::post('buscar', "MetabuscadorController@buscar");
