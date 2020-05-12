<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Imovel;
use \App\User;

class admController extends Controller
{
    public function __construct()
    {
        $this->middleware('require-admin');
    }

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
