<?php

namespace App\Http\Controllers;

use App\Models\jogadorModel;
use Illuminate\Http\Request;

class jogadorController extends Controller
{
    public function paginaInicial(){
        return view('pages.CadastrarJ');
    }//Fim da pagina inicial

    public function cad(){
        return view('pages.cadastrarJ');
    }//Fim do método para direcionar á página cadastrar jogador

    public function inserir(Request $request){
        $nome = $request->input('nome');//Coletando o nome
        $posicao = $request->input('posicao');//Coletando a posição
        $numero = $request->input('numero');//Coletando o número
        $idade = $request->input('idade');//Coletando a idade
        $timeNome = $request->input('timeNome');//Coletando o nome do time 
        //Inserir no banco
        $model = new jogadorModel();
        $model->nome = $nome;
        $model->posicao = $posicao;
        $model->numero = $numero;
        $model->idade = $idade;
        $model->timeNome = $timeNome;
        //Efetivar a inserção no banco
        $model->save();
        //Depois de cadastrar permanece na pagina vazia ou vai para outra página
        return redirect('/consultarPaginaInicialJ');
    }//Fim do método inserir

    public function consultar(){
        $ids = jogadorModel::all();
        return view('pages.consultarJ', compact('ids'));
    }//Fim do Consultar

    public function editar($id){
        $dado = jogadorModel::findOrFail($id);
        return view('pages.editarJ', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id){
        jogadorModel::where('id', $id)->update($request->all());
        return redirect('/consultarPaginaInicialJ');
    }//Fim do atualizar

    public function excluir(Request $request, $id){
        jogadorModel::where('id', $id)->delete($request->all());
        return redirect('/consultarPaginaInicialJ');
    }//Fim do excluir
}//Fim da classe model
