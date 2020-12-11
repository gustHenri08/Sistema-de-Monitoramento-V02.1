<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Agente_model');//carregando o model do agente
    }

    public function index(){

        $this->load->view('cadastro-view'); //Carrega a view de cadastro do agente

    }

    public function create(){ //Carrega a Função cadastroAgente que está no Agente_model
        $this->Agente_model->cadastroAgente();
        redirect('Login');

    }

    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $this->Agente_model->cadastroAgenteMaster();
        redirect('Home/agentes');

    }

    public function editMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['agentes'] = $this->Agente_model->show($id);


        $this->load->view('administrador/cadastro-agente-view', $edit);
    }

    public function update($id){// Recebe os dados de 'cadastro-agente-view' e envia para a funcao update do Agente_Model
        $atualizar = $_POST;
        $this->Agente_model->update($id, $atualizar);
        redirect("Home/agentes");

    }
}