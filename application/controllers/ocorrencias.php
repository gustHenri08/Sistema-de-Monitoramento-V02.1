<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ocorrencias extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('ocorrencias_modal');//carregando o model dos presos
    }

    public function resultadoadmin(){
        $this->load->model('ocorrencias_modal');
        $dados['saidadetentos'] = $this->ocorrencias_modal->buscar($_POST);
        $this->load->view('Home/ocorrencias-view_admin',$dados);
    }


    public function resultado(){
        $this->load->model('ocorrencias_modal');
        $dados['saidadetentos'] = $this->ocorrencias_modal->buscar($_POST);
        $this->load->view('agentes/ocorrencias-view',$dados);
    }
      
    public function resultado_lista(){
        $this->load->model('ocorrencias_modal');
        $dados['saidadetentos'] = $this->ocorrencias_modal->busca($_POST);
        $this->load->view('agentes/listar-ocorrencia-view',$dados);
    }

    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/registroOcorrencias');

    }

       public function editMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->ocorrencias_modal->show($id);
        $this->load->view('agentes/editar_audiencia-view', $edit);
    }
    public function cadastrarMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->ocorrencias_modal->shows($id);
        $this->load->view('agentes/cadastros/cadastrar-ocorrencia-view', $edit);
    }
    

    public function update($id){
        $atualizar = $_POST;
        $this->ocorrencias_modal->update($id, $atualizar);
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

       public function editMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['presos'] = $this->ocorrencias_modal->show($id);
        $this->load->view('administrador/cadastros/cadastrar-ocorrencia-view-admin', $edit);
    }
    public function cadastrarMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['presos'] = $this->ocorrencias_modal->shows($id);
        $this->load->view('administrador/cadastros/cadastrar-ocorrencia-view-admin', $edit);
    }
    

    public function updateadmin($id){
        $atualizar = $_POST;
        $this->ocorrencias_modal->update($id, $atualizar);
        redirect("Home/registroOcorrenciasAdmin'");

    }

}

