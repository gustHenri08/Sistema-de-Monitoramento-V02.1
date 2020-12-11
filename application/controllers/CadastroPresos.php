<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroPresos extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Presos_model');//carregando o model dos presos
    }

    public function index(){
      $this->load->view('cadastrar-presos-view');
    }

    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->Presos_model->cadastroPresos();
        redirect('Home/entradaPresos');

    }


}
