<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastrar_sair_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastrar_sair(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'datasaida'=> $this->input->post('datasaida'),
            'numprocesso'=> $this->input->post('numprocesso'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'mae'=> $this->input->post('mae'),
            'pai'=> $this->input->post('pai'),
            'motivo'=> $this->input->post('motivo'),
            'origem'=> $this->input->post('origem'),
            'documentacao'=> $this->input->post('documentacao'),
            'crimerepercurssao'=> $this->input->post('crimerepercurssao'),
            'obs'=> $this->input->post('obs')
        );
        $this->db->insert('tbl_saidadetentos', $data);

    }

    

function get_cadastrar_sair_like ()  {    //fazer pesquisar

    $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like ('nome',$termo);
     return $this->db->get('tbl_saidadetentos')->result();
		

	}


}