<?php

namespace App\Http\Controllers;

use App\Habito;
use Illuminate\Http\Request;

class HabitosController extends Controller{

    public function index(){
      $habitos = Habito::all();
      return view('habitos', ['habitos'=>$habitos]);
    }
}
