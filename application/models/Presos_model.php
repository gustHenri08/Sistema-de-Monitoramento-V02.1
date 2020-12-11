<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presos_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastroPresos(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'dataentrada'=> $this->input->post('dataentrada'),
            'nome'=> $this->input->post('nome'),
            'nomemae'=> $this->input->post('nomemae'),
            'nomepai'=> $this->input->post('nomepai'),
            'motivo'=> $this->input->post('motivo'),
            'origem'=> $this->input->post('origem'),
            'dataprisao'=> $this->input->post('dataprisao'),
            'documentacao'=> $this->input->post('documentacao'),
            'crimerepercurssao'=> $this->input->post('crimerepercurssao'),
            'observacoesgerais'=> $this->input->post('observacoesgerais')
        );
        $this->db->insert('tbl_presos', $data);

    }

    
}