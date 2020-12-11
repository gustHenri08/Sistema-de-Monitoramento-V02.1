<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agente_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastroAgente(){ // Função reponsável por cadastrar os agentes ao bando de dados: db_agente
        $data = array(
            'nomecompleto'=> $this->input->post('nomecompleto'), //Recebe os dados via post
            'matricula'=> $this->input->post('matricula'),
            'nucleo'=> $this->input->post('nucleo'),
            'unidadeprisional'=> $this->input->post('unidadeprisional'),
            'emailinstitucional'=> $this->input->post('emailinstitucional')
        );
        $this->db->insert('tbl_agente', $data);
    }


    function cadastroAgenteMaster(){ // Função reponsável por cadastrar os agentes ao bando de dados: db_agente (Cadatro realizado pelo administrador)
        $datamaster = array(
            'nomecompleto'=> $this->input->post('nomecompleto'), //Recebe os dados via post
            'matricula'=> $this->input->post('matricula'),
            'nucleo'=> $this->input->post('nucleo'),
            'unidadeprisional'=> $this->input->post('unidadeprisional'),
            'emailinstitucional'=> $this->input->post('emailinstitucional'),
            'login'=> $this->input->post('login'),
            'senha'=> $this->input->post('senha'),
            'funcao'=> $this->input->post('funcao'),
            'funcionarioativo'=> $this->input->post('funcionarioativo')
        );
        $this->db->insert('tbl_agente', $datamaster);
    }



    public function cadastrados(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get("tbl_agente")->result_array();

        //Função envia os dados dos agentes para o controller de 'Agente'
    }

    public function show($id){ // Envia os dados para o controller de 'Cadastro'
        return $this->db->get_where('tbl_agente', array(
            "id" => $id
        ))->row_array();
    }

    public function update($id, $atualizar){ // Recebe os dados do controller de cadastro
        $this->db->where('id', $id);
        return $this->db->update("tbl_agente", $atualizar);

    }
}