<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ocorrencias extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('ocorrencias_modal');//carregando o model dos presos
    }

    public function resultado(){
        $this->load->model('ocorrencias_modal');
        $dados['saidadetentos'] = $this->ocorrencias_modal->buscar($_POST);
        $this->load->view('agentes/ocorrencias-view',$dados);
    }

     public function result_data(){
        $this->load->model('ocorrencias_modal');
        $dados['saidadetentos'] = $this->ocorrencias_modal->buscadata($_POST);
        $this->load->view('agentes/listar-ocorrencia-view',$dados);
    }

    public function resultado_lista(){
        $this->load->model('ocorrencias_modal');
        $dados['saidadetentos'] = $this->ocorrencias_modal->busca($_POST);
        $this->load->view('agentes/listar-ocorrencia-view',$dados);
    }

    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->ocorrencias_modal->cadastroocorrencia();
        redirect('Home/registroOcorrencias');

    }

       public function editMaster($idd){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $this->load->model('ocorrencias_modal');
        $edit['saidadetentos'] = $this->ocorrencias_modal->show($idd);
        $this->load->view('agentes/editar_ocorrencia_view', $edit);
    }
    public function cadastrarMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $this->load->model('ocorrencias_modal');
        $edit['presos'] = $this->ocorrencias_modal->shows($id);
        $this->load->view('agentes/cadastros/cadastrar-ocorrencias-view', $edit);
    }
    
    public function update($idd){
        $atualizar = $_POST;
        $this->ocorrencias_modal->update($idd, $atualizar);
        redirect("Home/registroOcorrencias");

    }

    public function delete($idd){
       $this->load->model('ocorrencias_modal');
       $this->ocorrencias_modal->destroy($idd);
       redirect("Home/registroOcorrencias");
    }
  

        // admin

    public function createMasteradmin(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->ocorrencias_modal->cadastroocorrencia();
        redirect('Home/registroOcorrenciasAdmin');

    }
    
    public function cadastrarMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['presos'] = $this->ocorrencias_modal->shows($id);
        $this->load->view('administrador/cadastros/cadastrar-ocorrencia-view-admin', $edit);
    }


    public function resultadoadmin(){
        $this->load->model('ocorrencias_modal');
        $dados['saidadetentos'] = $this->ocorrencias_modal->buscar($_POST);
        $this->load->view('administrador/ocorrencias-view-admin',$dados);
    }

}

