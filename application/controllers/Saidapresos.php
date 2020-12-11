<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saidapresos extends CI_Controller{

    public function index(){
        $this->db->select('*');
        $dados['tbl_saidadetentos'] = $this->db->get('tbl_saidadetentos')->result();
        $this->load->view('Saida-presos-view',$dados);
    }

    
	public function usuarios(){
		return $this->db->get('tbl_saidadetentos')->result_array();
	}
     
    public function pesquisar(){
        
        $this->load->model('cadastrar_sair_model','tbl_saidadetentos');
        $dados['tbl_saidadetentos'] = $this->cadastrar_sair->get_cadastrar_sair_like();
        $this->load->view('Saida-presos-view',$dados);
     
        
    

    }
     


}
