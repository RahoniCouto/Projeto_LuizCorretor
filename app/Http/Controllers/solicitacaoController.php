<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitacao;
use \App\Imovel;
use \App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class solicitacaoController extends Controller
{
    protected function validarSolicitacao($request){
        $validator = Validator::make($request->all(), [
            "tipoVC" => "required",
            "bairroEnderecoVC" => "required",
            "cidadeEnderecoVC" => "required",
            "qtdQuartos" => "required | numeric ",
            "valorMin" => "required | numeric",
            "valorMax" => "required | numeric",
            
        ]);
        return $validator;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $qtd = $request['qtd'] ?: 15;
        $page = $request['page'] ?: 1;
        $buscar = $request['buscar'];
        $tipoVC = $request['tipoVC'];

        Paginator::currentPageResolver(function () use ($page) {
                return $page;
        });

        if($buscar){
            $solicitacoes=DB::table('solicitacoes')->where('cidadeEnderecoVC', '=', $buscar)->paginate($qtd);
        }else{
            if($tipoVC){
                $solicitacoes=DB::table('solicitacoes')->where('tipoVC', '=', $tipoVC)->paginate($qtd);
            }else{
                $solicitacoes=DB::table('solicitacoes')->paginate($qtd);
            }           
        }
        $solicitacoes=$solicitacoes->appends(Request::capture()->except('page'));
        
        return view('admin.solicitacoesAdmin', compact('solicitacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarSolicitacao($request);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $solicitacao = Solicitacao::create([

            "solicitacao_id" => Auth::id(),
            "tipoVC" => $request->input('tipoVC'),
            "bairroEnderecoVC" => $request->input('bairroEnderecoVC'),
            "cidadeEnderecoVC" => $request->input('cidadeEnderecoVC'),
            "qtdQuartos" => $request->input('qtdQuartos'),
            "valorMax" => $request->input('valorMax'),
            "valorMin" => $request->input('valorMin')
        ]);


        // salvando registro no banco de dados
        $solicitacao->save();

        return redirect()->route('solicitacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitacao=solicitacao::find($id);

        return view('admin.solicitacao', compact('solicitacao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        solicitacao::find($id)->delete();

        return redirect()->route('solicitacao.index');
    }

    public function remover($id) {
        $solicitacao=solicitacao::find($id);
        return view('admin.removeSolicitacao', compact('solicitacao'));
    }
}
