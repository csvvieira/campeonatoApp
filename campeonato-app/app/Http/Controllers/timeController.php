<?php

namespace App\Http\Controllers;

use App\Models\timeModel;
use Illuminate\Http\Request;

class timeController extends Controller
{
    public function cad(){
        return view('pages.cadastrarT');
    }//Fim do método para direcionar á página cadastrar time

    public function inserir(Request $request){
        $nome = $request->input('nome');//Coletando o nome
        $cidade = $request->input('cidade');//Coletando a cidade
        //Inserir no banco
        $model = new timeModel();
        $model->nome = $nome;
        $model->cidade = $cidade;
        //Efetivar a inserção no banco
        $model->save();
        //Depois de cadastrar permanece na pagina vazia ou vai para outra página
        return redirect('/consultarPaginaInicialT');
    }//Fim do método inserir

    public function consultar(){
        $ids = timeModel::all();
        return view('pages.consultarT', compact('ids'));
    }//Fim do Consultar

    public function editar($id){
        $dado = timeModel::findOrFail($id);
        return view('pages.editarT', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id){
        timeModel::where('id', $id)->update($request->all());
        return redirect('/consultarPaginaInicialT');
    }//Fim do atualizar

    public function excluir(Request $request, $id){
        timeModel::where('id', $id)->delete($request->all());
        return redirect('/consultarPaginaInicialT');
    }//Fim do excluir

    public function consultarPaginaInicialT(Request $request, $id){
        $ids = timeModel::all();
        return view('/consultarPaginaInicialT', compact('ids'));
    }//Fim do método
}//Fim da classe model
