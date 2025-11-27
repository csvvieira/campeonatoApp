<?php

namespace App\Http\Controllers;

use App\Models\campeonatoModel;
use Illuminate\Http\Request;

class campeonatoController extends Controller
{
    public function cad(){
        return view('pages.campeonato.cadastrarC');
    }//Fim do método para direcionar á página cadastrar campeonato

    public function inserir(Request $request){
        $nome = $request->input('nome');//Coletando o nome
        $dataEncerramento = $request->input('dataEncerramento');//Coletando a data de encerramento
        $endereco = $request->input('endereco');//Coletando o endereço
        //Inserir os dados no banco
        $model = new campeonatoModel();
        $model->nome = $nome;
        $model->dataEncerramento = $dataEncerramento;
        $model->endereco = $endereco;
        //Efetivar a inserção no banco
        $model->save();
        //Depois de cadastrar permanece na pagina vazia ou vai para outra página
        return redirect('consultarPaginaInicialC');
    }//Fim do método inserir

    public function consultar(){
        $ids = campeonatoModel::all();
        return view('pages.campeonato,consultarC', compact('ids'));
    }//Fim do Consultar

    public function editar($id){
        $dado = campeonatoModel::findOrFail($id);
        return view('pages.campeonato.editarC', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id){
        campeonatoModel::where('id', $id)->update($request->all());
        return redirect('/consultarPaginaInicialC');
    }//Fim do atualizar

    public function excluir(Request $request, $id){
        campeonatoModel::where('id', $id)->delete($request->all());
        return redirect('/consultarPaginaInicialC');
    }//Fim do excluir

    public function consultarPaginaInicialC(){
        $ids = campeonatoModel::all();
        return view('pages.campeonato.ConsultarC', compact('ids'));
    }//Fim do consultarPaginaInicialC
}//Fim da classe model
