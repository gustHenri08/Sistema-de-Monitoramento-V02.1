<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saidatransito extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('SaidapresosAudiencia_model');//carregando o model dos presos
    }
    
    // Parte do transito interno

    
    public function createi(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/transitoInterno');

    }
     
    public function resultadoi(){
        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscari($_POST);
        $this->load->view('agentes/transito-interno-view',$dados);
        }
    public function createMasteri(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMasteri();
        redirect('Home/transitoInterno');

    }

       public function editMasteri($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->showssi($id);
        $this->load->view('agentes/edicao_interno_view', $edit);
    }
    public function cadastrarMasteri($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('agentes/cadastrar-transito-interno-view', $edit);
    }
    

    public function updatei($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->updatei($id, $atualizar);
        redirect("Home/transitoInterno");

    }



    // parte do admin

    public function createadmini(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMasteri();
        redirect('Home/transitoInternoAdmin');

    }
    
    public function usuariosadmini(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    
    public function resultadoadmini(){

        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscari($_POST);
        $this->load->view('administrador/transito-interno-view-admin',$dados);

    }
 
    public function createMasteradmini(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMasteri();
        redirect('Home/transitoInternoAdmin');

    }

       public function editMasteradmini($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->showssi($id);
        $this->load->view('administrador/edicao_interno_view_admin', $edit);
    }
    public function cadastrarMasteradmini($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('administrador/cadastrar-transito-interno-view_admin', $edit);
    }
    

    public function updateadmini($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->updatei($id, $atualizar);
        redirect("Home/transitoInternoAdmin");

    }
    
         // parte do externo



             
    public function createe(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/transitoExternoAdmin');

    }

    public function usuariose(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    public function resultadoe(){
        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscare($_POST);
        $this->load->view('agentes/transito-externo-view',$dados);
        }
    public function createMastere(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMastere();
        redirect('Home/transitoExterno');

    }

       public function editMastere($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->showsse($id);
        $this->load->view('agentes/edicao_enterno_view', $edit);
    }
    public function cadastrarMastere($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('agentes/cadastrar-transito-externo-view', $edit);
    }
    

    public function updatee($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->updateadmine($id, $atualizar);
        redirect("Home/transitoExterno");

    }



    // parte do admin

    public function createadmine(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/transitoExternoAdmin');

    }
    
    public function usuariosadmine(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    
    public function resultadoadmine(){

        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscare($_POST);
        $this->load->view('administrador/transito-externo-view-admin',$dados);

    }

    public function createMasteradmine(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMastere();
        redirect('Home/transitoExternoAdmin');

    }

       public function editMasteradmine($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->showsse($id);
        $this->load->view('administrador/edicao_enterno_view_admin', $edit);
    }
    public function cadastrarMasteradmine($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('administrador/cadastrar-transito-externo-view_admin', $edit);
    }
    

    public function updateadmine($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->updateadmine($id, $atualizar);
        redirect("Home/transitoExternoAdmin");

    }
    



}