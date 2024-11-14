<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductosRequest;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductosController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos= Producto::all();
        return view("productos.index", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductosRequest $request)
    {
        //$this->validate($request, ['seccion'=>'required', 'pais_origen'=>'required', 'nombre_articulo'=>'required', 'fecha'=>'required', 'precio'=>'required']);
        //return view("productos.insert");
        /*$producto = new Producto;
        $producto->nombre_articulo=$request->nombre_articulo;
        $producto->seccion=$request->seccion;
        $producto->precio=$request->precio;
        $producto->fecha=$request->fecha;
        $producto->pais_origen=$request->pais_origen;
        $producto->save();*/

        $entrada = $request->all();
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images', $nombre);
            $entrada['ruta']=$nombre;
        }
        Producto::create($entrada);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view("productos.show", compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view("productos.edit", compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect("/productos");
    }
}
