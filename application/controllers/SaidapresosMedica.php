
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosMedica extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('SaidapresosAudiencia_model');//carregando o model dos presos
    }

    
    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMastermedico();
        redirect('Home/saidaMedica');

    }

    public function resultado(){
        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('agentes/saida-presosMedica-view',$dados);
    }

    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMastermedico();
        redirect('Home/saidaMedica');

    }

       public function editMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('agentes/editar_medica-view', $edit);
    }
    public function cadastrarMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('agentes/cadastrar_medica_view', $edit);
    }
    

    public function update($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->updatemedico($id, $atualizar);
        redirect("Home/saidaMedica");

    }



    // parte do admin

    public function createadmin(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMastermedico();
        redirect('Home/saidaMedicaAdmin');

    }
     
    public function resultadoadmin(){
        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('administrador/saida-presosMedica-view',$dados);
    }

    public function createMasteradmin(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMastermedico();
        redirect('Home/saidaMedicaAdmin');

    }
       public function editMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('administrador/editar_medica-view_admin', $edit);
    }
    public function cadastrarMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('administrador/cadastrar_medica_view_admin', $edit);
     }
    

    public function updateadmin($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->updatemedico($id, $atualizar);
        redirect('Home/saidaMedicaAdmin');

    }
    

}