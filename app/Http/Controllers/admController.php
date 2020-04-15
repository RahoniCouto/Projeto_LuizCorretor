<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Imovel;
use \App\User;

class admController extends Controller
{
    public function admin () {
        $imoveis = Imovel::all();
        $users = User::all();
        return view('admin.home', compact('imoveis', 'users'));
    }

    public function ClientesAdmin(){
        $users = User::all();

        return view('admin.clientes', compact('users'));
    }
    
}
