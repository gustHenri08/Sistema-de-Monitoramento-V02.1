<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosAudiencia extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('SaidapresosAudiencia_model');//carregando o model dos presos
    }

    
    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudiencia');

    }

    public function usuarios(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    public function resultado(){
        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('agentes/saida-presosAudiencia-view',$dados);
        }
    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudiencia');

    }

       public function editMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('agentes/editar_audiencia-view', $edit);
    }
    public function cadastrarMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('agentes/cadastrar_audiencia_view', $edit);
    }
    

    public function update($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/saidaAudiencia");

    }



    // parte do admin

    public function createadmin(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudienciaAdmin');

    }
    
    public function usuariosadmin(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    
    public function resultadoadmin(){

        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('administrador/saida-presosAudiencia-view-admin',$dados);

    }

    public function createMasteradmin(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudienciaAdmin');

    }

       public function editMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('administrador/editar_audiencia-view_admin', $edit);
    }
    public function cadastrarMasteradmin($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('administrador/cadastrar_audiencia_view_admin', $edit);
    }
    

    public function updateadmin($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/saidaAudienciaAdmin");

    }
    

    // Parte do transito interno e externo

    
    public function createi(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudiencia');

    }

    public function usuarios(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    public function resultadoi(){
        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('agentes/saida-presosAudiencia-view',$dados);
        }
    public function createMasteri(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudiencia');

    }

       public function editMasteri($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('agentes/editar_audiencia-view', $edit);
    }
    public function cadastrarMasteri($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('agentes/cadastrar_audiencia_view', $edit);
    }
    

    public function updatei($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/saidaAudiencia");

    }



    // parte do admin

    public function createadmini(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudienciaAdmin');

    }
    
    public function usuariosadmini(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    
    public function resultadoadmini(){

        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('administrador/saida-presosAudiencia-view-admin',$dados);

    }

    public function createMasteradmini(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudienciaAdmin');

    }

       public function editMasteradmini($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('administrador/editar_audiencia-view_admin', $edit);
    }
    public function cadastrarMasteradmini($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('administrador/cadastrar_audiencia_view_admin', $edit);
    }
    

    public function updateadmini($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/saidaAudienciaAdmin");

    }
    
         // parte do externo



             
    public function createe(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudiencia');

    }

    public function usuariose(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    public function resultadoe(){
        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('agentes/saida-presosAudiencia-view',$dados);
        }
    public function createMastere(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudiencia');

    }

       public function editMastere($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('agentes/editar_audiencia-view', $edit);
    }
    public function cadastrarMastere($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('agentes/cadastrar_audiencia_view', $edit);
    }
    

    public function updatee($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/saidaAudiencia");

    }



    // parte do admin

    public function createadmine(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudienciaAdmin');

    }
    
    public function usuariosadmine(){
        return $this->db->get('tbl_presos')->result_array();
    }
     
    
    public function resultadoadmine(){

        $this->load->model('SaidapresosAudiencia_model');
        $dados['saidadetentos'] = $this->SaidapresosAudiencia_model->buscar($_POST);
        $this->load->view('administrador/saida-presosAudiencia-view-admin',$dados);

    }

    public function createMasteradmine(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->SaidapresosAudiencia_model->cadastroMaster();
        redirect('Home/saidaAudienciaAdmin');

    }

       public function editMasteradmine($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->show($id);
        $this->load->view('administrador/editar_audiencia-view_admin', $edit);
    }
    public function cadastrarMasteradmine($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['saidadetentos'] = $this->SaidapresosAudiencia_model->shows($id);
        $this->load->view('administrador/cadastrar_audiencia_view_admin', $edit);
    }
    

    public function updateadmine($id){
        $atualizar = $_POST;
        $this->SaidapresosAudiencia_model->update($id, $atualizar);
        redirect("Home/saidaAudienciaAdmin");

    }
    



}