<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastrar_sair extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('cadastrar_sair_model');//carregando o model dos presos
    }

    
    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->cadastrar_sair_model->cadastroMaster();
        redirect('Home/saidaCadeiaPublica');

    }
    
    public function index(){

        $this->load->view('cadastrar_sair_view'); //Carrega a view de cadastro do agente

    }
    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->cadastrar_sair_model->cadastroMaster();
        redirect('Home/saidaCadeiaPublica');

    }

    public function editMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->cadastrar_sair_model->show($id);
        $this->load->view('agentes/edicao_view', $edit);
    }
    public function cadastrarMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->cadastrar_sair_model->shows($id);
        $this->load->view('agentes/cadastrar_sair_view', $edit);
    }
    

    public function update($id){
        $atualizar = $_POST;
        $this->cadastrar_sair_model->update($id, $atualizar);
        redirect("Home/saidaCadeiaPublica");

    }


                 //               parte do admin
      
    public function createadmin(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->cadastrar_sair_model->cadastroMaster();
        redirect('administrador/Saidapresos');

    }
    
    public function indexadmin(){

        $this->load->view('cadastrar_sair_view_admin'); //Carrega a view de cadastro do agente

    }
    public function createMasteradmin(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->cadastrar_sair_model->cadastroMaster();
        redirect('Home/saidaCadeiaPublicaAdmin');

    }

    public function editMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->cadastrar_sair_model->show($id);
        $this->load->view('administrador/edicao_view_admin', $edit);
    }
    public function cadastrarMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->cadastrar_sair_model->shows($id);
        $this->load->view('administrador/cadastrar_sair_view_admin', $edit);
    }
    

    public function updateadmin($id){
        $atualizar = $_POST;
        $this->cadastrar_sair_model->update($id, $atualizar);
        redirect("Home/saidaCadeiaPublicaAdmin");

    }


    

}