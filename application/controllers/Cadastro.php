<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Agente_model'); //carregando o model do agente
        
    }

    public function index(){

        $this->load->view('cadastro-view'); //Carrega a view de cadastro do agente

    }

    public function create(){ //Carrega a Função cadastroAgente que está no Agente_model
        $matricula = $this->input->post('matricula');

        if(!$this->Agente_model->verificaMatricula($matricula)){// Função que verifica se a matricula já esta no banco:
            
            $this->Agente_model->cadastroAgente();// se não estiver ela cadastra
            redirect('Login');

        }else{
            redirect('Cadastro');// se ja estiver voltará para tela de cadastro
        }

    }

    public function createMaster(){ //Carrega a Função cadastroAgenteMaster que está no Agente_model
        $matricula = $this->input->post('matricula');

        $nome = $this->session->userdata("nomecompleto");//Variável que será usada para conferir se tem um nome em uma session
        if($nome == ""){ //Responsável por fazer o bloqueio das telas se não tiver uma session com dados registrados
            redirect("Login");

        }elseif(!$this->Agente_model->verificaMatricula($matricula)){ // Função que verifica se a matricula já esta no banco:
            
            $this->Agente_model->cadastroAgenteMaster(); // se não estiver ela cadastra
            redirect('Home/agentes');

        }else{
            
            redirect('Home/cadastrarAgente'); // se ja estiver voltará para tela de cadastro

        };
        

    }

    public function editMaster($id){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model

        $nome = $this->session->userdata("nomecompleto");//Variável que será usada para conferir se tem um nome em uma session
        if($nome == ""){ //Responsável por fazer o bloqueio das telas se não tiver uma session com dados registrados
            redirect("Login");
        }else{}

        $edit['agentes'] = $this->Agente_model->show($id);


        $this->load->view('administrador/cadastros/cadastro-agente-view', $edit);
    }

    public function update($id){// Recebe os dados de 'cadastro-agente-view' e envia para a funcao update do Agente_Model
        
        $nome = $this->session->userdata("nomecompleto");//Variável que será usada para conferir se tem um nome em uma session
        if($nome == ""){ //Responsável por fazer o bloqueio das telas se não tiver uma session com dados registrados
            redirect("Login");
        }else{}

        
        $atualizar = $_POST;
        $this->Agente_model->update($id, $atualizar);
        redirect("Home/agentes");

    }
}