
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosAudiencia_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastroMaster(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'data'=> $this->input->post('data'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'cidade-forum'=> $this->input->post('cidade-forum'),
            'condutores'=> $this->input->post('condutores')
            );
        $this->db->insert('tbl_saidaaudiencia', $data);

    }

    
  public function cadastrados(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get("tbl_saidadetentos")->result_array();
    }
    public function busca($busca){
        
        if(empty($busca))
            return array();

        $busca = $this->input->post('busca');

        $this->db->like('nome', $busca);
        $query = $this->db->get('tbl_saidadetentos');
        return $query->result_array();

        

    }
    public function show($id){
        return $this->db->get_where('tbl_saidaaudiencia', array(
            "id" => $id
        ))->row_array();
    }
    public function shows($id){
        return $this->db->get_where('tbl_saidadetentos', array(
            "id" => $id
        ))->row_array();
    }
    

    public function update($id, $atualizar){
        $this->db->where('id', $id);
        return $this->db->update("tbl_saidaaudiencia", $atualizar);

    }

    // modal do saidaMedicaAdmin e normal

    function cadastroMastermedico(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'data'=> $this->input->post('data'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'cidade-forum'=> $this->input->post('cidade-forum'),
            'condutores'=> $this->input->post('condutores')
            );
        $this->db->insert('tbl_saidaaudiencia', $data);

    }

    public function updatemedico($id, $atualizar){
        $this->db->where('id', $id);
        return $this->db->update("tbl_saidaaudiencia", $atualizar);

    }


}