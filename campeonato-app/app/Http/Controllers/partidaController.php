<?php

namespace App\Http\Controllers;

use App\Models\partidaModel;
use Illuminate\Http\Request;

class partidaController extends Controller
{
    public function cad(){
        return view('pages.partida.cadastrarP');
    }//Fim do método para direcionar á página cadastrar partida

    public function inserir(Request $request){
        $dataPartida = $request->input('dataPartida');//Coletando a data da partida
        $horario = $request->input('horario');//Coletando o horário
        $mandanteNome = $request->input('mandanteNome');//Coletando o mandante
        $visitanteNome = $request->input('visitanteNome');//Coletando o visitante
        $resultado = $request->input('resultado');//Coletando o resultado 
        $campeonatoNome = $request->input('campeonatoNome');//Coletando o nome do campeonato
        $arbitroNome = $request->input('arbitroNome');//Coletando o nome do árbitro
        //Inserir no banco
        $model = new partidaModel();
        $model->dataPartida = $dataPartida;
        $model->horario = $horario;
        $model->mandanteNome = $mandanteNome;
        $model->visitanteNome = $visitanteNome;
        $model->resultado = $resultado;
        $model->campeonatoNome = $campeonatoNome;
        $model->arbitroNome = $arbitroNome;
        //Efetivar a inserção no banco
        $model->save();
        //Depois de cadastrar permanece na pagina vazia ou vai para outra página
        return redirect('/consultarPaginaInicialP');
    }//Fim do método inserir

    public function consultar(){
        $ids = partidaModel::all();
        return view('pages.partida.consultarP', compact('ids'));
    }//Fim do Consultar

    public function editar($id){
        $dado = partidaModel::findOrFail($id);
        return view('pages.partida.editarP', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id){
        partidaModel::where('id', $id)->update($request->all());
        return redirect('/consultarPaginaInicialP');
    }//Fim do atualizar

    public function excluir(Request $request, $id){
        partidaModel::where('id', $id)->delete($request->all());
        return redirect('/consultarPaginaInicialP');
    }//Fim do excluir
    
    public function consultarPaginaInicialP(){
        $ids = partidaModel::all();
        return view('pages.partida.consultarP', compact('ids'));
    }//Fim do método
}//Fim da classe model