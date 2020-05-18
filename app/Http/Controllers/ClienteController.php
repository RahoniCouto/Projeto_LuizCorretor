<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Imovel;
use \App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('require-admin');
    }

    protected function validarCliente($request) {
        $validator=Validator::make($request->all(), [ 
                "nome"=> "required",
                "nomeCliente"=> "required",
                "sobrenomeCliente"=> "required",
                "email"=> "required",
                // "cpfCliente"=> "required",
                // "rgCliente"=> "required",
                // "telCliente" => "required",
                "celCliente"=> "required",
                // "logradouroEndereco"=> "required",
                // "bairroEndereco"=> "required",
                // "numeroEndereco"=> "required | numeric",
                // "cepEndereco"=> "required",
                // "cidadeEndereco"=> "required"
                
                ]);
        return $validator;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $qtd = $request['qtd'] ?: 15;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        $status = $request['status'];

        Paginator::currentPageResolver(function () use ($page) {
                return $page;
        });

        if($buscar){
            $clientes=DB::table('users')->where('nomeCliente', '=', $buscar)->paginate($qtd);
        }else{
            if($status){
                $clientes=DB::table('users')->where('status', '=', $status)->paginate($qtd);
            }else{
                $clientes=DB::table('users')->paginate($qtd);
            }           
        }
        $clientes=$clientes->appends(Request::capture()->except('page'));
        
        return view('admin.clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$this->validarCliente($request);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = User::create([

            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request['password']),
            'status' => $request->input('status'),
            'nomeCliente' => $request->input('nomeCliente'),
            'sobrenomeCliente' => $request->input('sobrenomeCliente'),
            'cpfCliente' => $request->input('cpfCliente'),
            'rgCliente' => $request->input('rgCliente'),
            'telCliente' => $request->input('telCliente'),
            'celCliente' => $request->input('celCliente'),
            'logradouroEndereco' => $request->input('logradouroEndereco'),
            'bairroEndereco' => $request->input('bairroEndereco'),
            'numeroEndereco' => $request->input('numeroEndereco'),
            'cepEndereco' => $request->input('cepEndereco'),
            'cidadeEndereco' => $request->input('cidadeEndereco'),
            
        ]);


        // salvando registro no banco de dados
        $user->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=user::find($id);

        return view('admin.cliente', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=user::find($id);

        return view('admin.editarCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator=$this->validarImovel($request);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $cliente=user::find($id);

        $dados=$request->all();

        $cliente->update($dados);

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::find($id)->delete();

        return redirect()->route('clientes.index');
    }

    public function remover($id) {
        $cliente=user::find($id);
        return view('admin.removeCliente', compact('cliente'));
    }
}
