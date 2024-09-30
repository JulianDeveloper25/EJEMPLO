<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(){
        //return "Bienvenidos a la pagina principal de los cursos desde el controlador";
        return view('cursos.show', ['curso']);
        }

    public function create(){
        return "Bienvenido a la pagina para crear cursos desde el controlador";
    }
        public function show(){
        return "Bienvenidos al curso desde el controlador";
        }

}