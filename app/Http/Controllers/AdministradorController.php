<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function __construct() {
        $this->Middleware('App\Http\Middleware\EsAdmin');
    }
    public function index(){
        return "Si has llegado aquí, tienes rol de administrador";
    }
}
