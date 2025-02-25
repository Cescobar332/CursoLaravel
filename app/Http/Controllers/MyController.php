<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("welcome");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return view("articulos");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view("mostrar");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function contactar()
    {
        return view("contacto");
    }
    public function galeria()
    {
        $alumnos = ["Ana", "Sara", "Antonio", "Manuel"];
        //$alumnos = [];

        return view("galeria", compact("alumnos"));
    }
}
