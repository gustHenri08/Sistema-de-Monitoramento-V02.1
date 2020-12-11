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

    public function presoscadastrados(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get("tbl_presos")->result_array();

        //Função envia os dados dos agentes para o controller de 'Agente'
    }

    public function showpresos($idpresos){ // Envia os dados para o controller de 'Cadastro'
        return $this->db->get_where('tbl_presos', array(
            "id" => $idpresos
        ))->row_array();
    }

    public function updatepresos($idpresos, $atualizar){ // Recebe os dados do controller de cadastro
        $this->db->where('id', $idpresos);
        return $this->db->update("tbl_presos", $atualizar);

    }

    
}