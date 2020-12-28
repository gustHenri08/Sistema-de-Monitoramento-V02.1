<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastrar_sair_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    function cadastroMaster(){ // Função reponsável por cadastrar os agentes ao bando de dados: db_agente (Cadatro realizado pelo administrador)
        $datamaster = array(
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
             'destino'=> $this->input->post('destino'),
            'condutores'=> $this->input->post('condutores'),
            'documentacao'=> $this->input->post('documentacao'),
            'crimerepercurssao'=> $this->input->post('crimerepercurssao'),
            'obs'=> $this->input->post('obs')
        );
        $this->db->insert('tbl_saidadetentos', $datamaster);
    }

    public function cadastrados(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get("tbl_presos")->result_array();
    }
    public function buscar($busca){
        
        if(empty($busca))
            return array();

        $busca = $this->input->post('busca');

        $this->db->like('nome', $busca);
        $query = $this->db->get('tbl_presos');
        return $query->result_array();

    	

    }
    public function show($id){
        return $this->db->get_where('tbl_saidadetentos', array(
            "id" => $id
        ))->row_array();
    }
    public function shows($id){
        return $this->db->get_where('tbl_presos', array(
            "id" => $id
        ))->row_array();
    }
    

    public function update($id, $atualizar){
        $this->db->where('id', $id);
        return $this->db->update("tbl_saidadetentos", $atualizar);

    }


}