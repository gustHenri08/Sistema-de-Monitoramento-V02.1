<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ocorrencias extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('ocorrencias_model');//carregando o model dos presos
    }

    public function resultadoadmin(){
        $this->load->model('ocorrencias_model');
        $dados['saidadetentos'] = $this->cadastrar_sair_model->buscar($_POST);
        $this->load->view('administrador/ocorrencias-view-admin',$dados);
    }


    public function resultado(){
        $this->load->model('ocorrencias_model');
        $dados['saidadetentos'] = $this->cadastrar_sair_model->buscar($_POST);
        $this->load->view('agentes/ocorrencias-view',$dados);
    }

    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/listarOcorrencias');

    }

       public function editMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('agentes/editar_audiencia-view', $edit);
    }
    public function cadastrarMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('agentes/cadastros/cadastrar-ocorrencia-view', $edit);
    }
    

    public function update($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/listarOcorrencias");

    }

        // admin

    public function createMasteradmin(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/listarOcorrenciasAdmin');

    }

       public function editMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('administrador/cadastros/cadastrar-ocorrencia-view-admin', $edit);
    }
    public function cadastrarMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('administrador/cadastros/cadastrar-ocorrencia-view-admin', $edit);
    }
    

    public function updateadmin($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/listarOcorrenciasAdmin'");

    }

}

