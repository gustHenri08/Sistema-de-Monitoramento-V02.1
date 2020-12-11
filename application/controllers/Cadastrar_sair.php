<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastrar_sair extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('cadastrar_sair_model');//carregando o model dos presos
    }

    
    public function index(){

        $this->load->view('cadastrar_sair_view'); //Carrega a view de cadastro do agente

    }

  
    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->cadastrar_sair_model->cadastrar_sair();
        redirect('Saidapresos');

    }

}