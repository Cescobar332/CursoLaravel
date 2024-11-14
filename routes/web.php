<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\Ejemplo3Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductosController;
use App\Models\Articulo;
use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    //return view('welcome');
    $datos=[
        "titulo"=>"Hola alumnos de Laravel",
        "contenido"=>"Esto es una prueba de envío",
    ];
    Mail::send("emails.test", $datos, function($mensaje){
        $mensaje->to("mvillamizar666@unab.edu.co", "Bami")->subject("Te bamo bami bami");
    });
});
/*Route::get('/', [PaginasController::class, 'inicio']);
Route::get('/inicio', [PaginasController::class, 'inicio']);
Route::get('/quienesSomos', [PaginasController::class, 'quienesSomos']);
Route::get('/dondeEstamos', [PaginasController::class, 'dondeEstamos']);
Route::get('/foro', [PaginasController::class, 'foro']);

Route::resource("posts", Ejemplo3Controller::class);*/

/*Route::get('/', [MyController::class, 'index']);
Route::get('/crear', [MyController::class, 'create']);
Route::get('/articulos', [MyController::class, 'store']);
Route::get('/mostrar', [MyController::class, 'show']);
Route::get('/contacto', [MyController::class, 'contactar']);
Route::get('/galeria', [MyController::class, 'galeria']);*/

/*Route::get('/insertar', function(){
    DB::insert('INSERT INTO articulos ("Nombre_Articulo", "Precio", "pais_origen", "observaciones", "seccion") VALUES (?, ?, ?, ?, ?)', ["Navaja", 120, "Suiza", "Multiusos", "Ferretería"]);
});

Route::get('/leer', function(){
    $resultados = DB::select("SELECT * FROM articulos WHERE ID=?", [1]);
    foreach($resultados as $articulo){
        return $articulo->Nombre_Articulo;
    }
});

Route::get('/actualiza', function(){
    DB::update("UPDATE articulos SET SECCION='DECORACION' WHERE ID=?", [1]);
});

Route::get('/borrar', function(){
    DB::update("DELETE FROM articulos WHERE ID=?", [1]);
});*/

/*Route::get('/leer', function () {
    $articulos = Articulo::all();
    foreach ($articulos as $articulo) {
        echo "Nombre: " . $articulo->Nombre_Articulo . " Precio: " . $articulo->Precio . " Sección: " . $articulo->seccion . "<br>";
    }
    $articulos = Articulo::where("id", 1)->get();
    $articulos = Articulo::withTrashed()
        ->where('id', 4)
        ->restore();
    //->get();
    return $articulos;
});

Route::get('/insertar', function () {
    $articulos = new Articulo;

    $articulos->Nombre_Articulo = "Pantalones";
    $articulos->Precio = 60;
    $articulos->pais_origen = "España";
    $articulos->observaciones = "Lavados a la piedra";
    $articulos->seccion = "Confección";

    $articulos->save();
});

Route::get('/actualizar', function () {
    $articulos = Articulo::find(6);

    $articulos->Nombre_Articulo="Pantalones";
    $articulos->Precio=90;
    $articulos->pais_origen="España";
    $articulos->observaciones="Lavados a la piedra";
    $articulos->seccion="Confección";

    $articulos->save();

    Articulo::where("seccion", "Menaje")->where("pais_origen", "España")->update(["Precio" => 90]);
});

Route::get('/borrar', function () {
    $articulo = Articulo::find(2);

    $articulo->delete();

    Articulo::where("seccion", "Ferretería")->delete();
});

Route::get('/insercionvarios', function () {
    Articulo::create(["Nombre_Articulo" => "Impresora", "Precio" => 50, "pais_origen" => "Colombia", "observaciones" => "Nada que decir", "seccion" => "Informática"]);
});

Route::get('/softdelete', function () {
    Articulo::find(4)->delete();
});

Route::get('/harddelete', function () {
    $articulos = Articulo::withTrashed()
        ->where('id', 4)
        ->forceDelete();
});

Route::get('/cliente/{id}/articulo', function ($id) {
    return Cliente::find($id)->articulo;
});

Route::get('/articulo/{id}/cliente', function ($id) {
    return Articulo::find($id)->cliente->nombre;
});

Route::get('/cliente/{id}/articulo', function ($id) {
    return Cliente::find($id)->articulo;
});

Route::get('/articulos', function () {
    $articulos = Cliente::find(3)->articulos->where("pais_origen", "Colombia");
    foreach ($articulos as $articulo) {
        echo $articulo->Nombre_Articulo . "<br/>";
    }
});

Route::get('/cliente/{id}/perfil', function ($id) {
    $cliente = Cliente::find($id);

    foreach ($cliente->perfils as $perfil) {
        return $perfil->nombre;
    }
});

Route::get('/calificaciones', function () {
    $cliente = Cliente::find(1);

    foreach($cliente->calificaciones as $calificacion){
        return $calificacion->calificacion;
    }

    $articulo = Articulo::find(4);

    foreach ($articulo->calificaciones as $calificacion) {
        return $calificacion->calificacion;
    }
});*/

/* Route::get('/inicio', [ProductosController::class, 'index']);
Route::get('/crear', [ProductosController::class, 'create']);
Route::get('/actualizar', [ProductosController::class, 'update']);
Route::get('/insertar', [ProductosController::class, 'store']);
Route::get('/borrar', [ProductosController::class, 'destroy']); */
Route::resource('productos', ProductosController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdministradorController::class, 'index']);