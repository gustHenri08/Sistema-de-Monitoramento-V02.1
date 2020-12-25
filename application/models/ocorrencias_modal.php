
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ocorrencias_modal extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
   

    function cadastroocorrencia(){ // Função reponsável por cadastrar os agentes ao bando de dados: db_agente (Cadatro realizado pelo administrador)
        $datamaster = array(
            'id'=> $this->input->post('id'), //Recebe os dados via post
            'nome'=> $this->input->post('nome'),
            'nsiap'=> $this->input->post('nsiap'),
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'data'=> $this->input->post('data'),
            'resumo_Ocorrencia'=> $this->input->post('resumo_Ocorrencia'),
            'cadastrante'=>  $this->session->userdata("nomecompleto"),
            'funcaocadastrante'=>  $this->session->userdata("funcao"),
            'matriculacadastrante'=>  $this->session->userdata("matricula"),
            'tipo'=> $this->input->post('tipo')
        );
        $this->db->insert('tbl_ocorrencia', $datamaster);
    }

    public function cadastrados(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get("tbl_presos")->result_array();
    }
    
    public function cadastradoeditar(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get("tbl_ocorrencia")->result_array();
    }

    public function buscar($busca){
        
        if(empty($busca))
            return array();
        $busca = $this->input->post('busca');
        $this->db->like('nome', $busca);
        $query = $this->db->get('tbl_presos');
        return $query->result_array(); 	
    }

    public function busca($busca){
        
        if(empty($busca))
            return array();
        $busca = $this->input->post('busca');
        $this->db->like('nome', $busca);
        $query = $this->db->get('tbl_ocorrencia');
        return $query->result_array(); 	
    }

    public function show($id){
        return $this->db->get_where('tbl_ocorrencia', array(
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
        return $this->db->update("tbl_ocorrencia", $atualizar);

    }

    public function destroy ($idd){
        $this->db->where('idd', $idd);
        return $this->db->delete("tbl_ocorrencia");

    }



}