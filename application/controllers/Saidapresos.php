<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saidapresos extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('cadastrar_sair_model');//carregando o model dos presos
    }


    public function index(){
        $this->db->select('*');
        $data['saidadetentos'] = $this->cadastrar_sair_model->cadastrados();
        $this->load->view('agentes/saida-presos-view',$data);
    }

    public function usuarios(){
		return $this->db->get('tbl_presos')->result_array();
	}
     
    public function resultado(){

        $this->load->model('cadastrar_sair_model');

        $dados['saidadetentos'] = $this->cadastrar_sair_model->buscar($_POST);
        $this->load->view('agentes/saida-presos-view',$dados);
    }
    

    // parte do adm

    public function indexadmin(){
        $this->db->select('*');
        $data['saidadetentos'] = $this->cadastrar_sair_model->cadastrados();
        $this->load->view('administrador/saida-presos-view-admin',$data);
    }

    public function usuariosadmin(){
		return $this->db->get('tbl_presos')->result_array();
	}
     
    public function resultadoadmin(){

        $this->load->model('cadastrar_sair_model');

        $dados['saidadetentos'] = $this->cadastrar_sair_model->buscar($_POST);
        $this->load->view('administrador/saida-presos-view-admin',$dados);
    }


}

