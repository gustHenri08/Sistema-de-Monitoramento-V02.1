
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosAudiencia_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastroMaster(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'id'=> $this->input->post('id'),
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'nucleo'=>$this->session->userdata("nucleo"),
            'data'=> $this->input->post('data'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'cidade-forum'=> $this->input->post('cidade-forum'),
            'cadastrante'=>  $this->session->userdata("nomecompleto"),
            'funcaocadastrante'=>  $this->session->userdata("funcao"),
            'matriculacadastrante'=>  $this->session->userdata("matricula"),
            'condutores'=> $this->input->post('condutores')
            );
        $this->db->insert('tbl_saidaaudiencia', $data);

    }

    
  public function cadastrados(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
    return $this->db->get_where("tbl_saidadetentos", array('cadeiapublica' => $this->session->userdata('unidadeprisional')) )->result_array();
    }

    public function cadastradoi(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get_where("tbl_interno", array('cadeiapublica' => $this->session->userdata('unidadeprisional')) )->result_array();
    }

    public function cadastradoe(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get_where("tbl_enterno", array('cadeiapublica' => $this->session->userdata('unidadeprisional')) )->result_array();
    }

    public function cadastradosd(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
      return $this->db->get("tbl_saidadetentos")->result_array();
    }
    
        public function cadastradoid(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
            return $this->db->get("tbl_interno")->result_array();
        }
    
        public function cadastradoed(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
            return $this->db->get("tbl_enterno")->result_array();
        }
    

    public function buscar($busca){
        
        if(empty($busca))
            return array();

        $busca = $this->input->post('busca');

        $this->db->like('nome', $busca);
        $query = $this->db->get('tbl_saidadetentos');
        return $query->result_array();

    	

    }

    public function buscare($busca){
        
        if(empty($busca))
            return array();

        $busca = $this->input->post('busca');

        $this->db->like('nome', $busca);
        $query = $this->db->get('tbl_enterno');
        return $query->result_array();

    	

    }

    public function buscari($busca){
        
        if(empty($busca))
            return array();

        $busca = $this->input->post('busca');

        $this->db->like('nome', $busca);
        $query = $this->db->get('tbl_interno');
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
            'nucleo'=>$this->session->userdata("nucleo"),
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'data'=> $this->input->post('data'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'motivo'=> $this->input->post('motivo'),
            'condutores'=> $this->input->post('condutores'),
            'cadastrante'=>  $this->session->userdata("nomecompleto"),
            'funcaocadastrante'=>  $this->session->userdata("funcao"),
            'matriculacadastrante'=>  $this->session->userdata("matricula"),
            'descricaosaida'=> $this->input->post('descricaosaida'),
            
            'id'=> $this->input->post('id')
            );
        $this->db->insert('tbl_saidasaude', $data);

    }

    public function updatemedico($id, $atualizar){
        $this->db->where('id', $id);
        return $this->db->update("tbl_saidasaude", $atualizar);

    }
    public function showss($id){
        return $this->db->get_where('tbl_saidasaude', array(
            "id" => $id
        ))->row_array();
    }

    //modal transito interno
      function cadastroMasteri(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'data'=> $this->input->post('data'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'motivo'=> $this->input->post('motivo'),
            'obs'=> $this->input->post('obs'),
            'documentacao'=> $this->input->post('documentacao'),
            'cadastrante'=>  $this->session->userdata("nomecompleto"),
            'funcaocadastrante'=>  $this->session->userdata("funcao"),
            'matriculacadastrante'=>  $this->session->userdata("matricula"),
            'destino'=> $this->input->post('destino')
            
            );
        $this->db->insert('tbl_interno', $data);

    }

    public function updatei($id, $atualizar){
        $this->db->where('id', $id);
        return $this->db->update("tbl_interno", $atualizar);

    }
    public function showssi($id){
        return $this->db->get_where('tbl_interno', array(
            "id" => $id
        ))->row_array();
    }



    //modal transito enterno


    function cadastroMastere(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'data'=> $this->input->post('data'),
            'numsiap'=> $this->input->post('numsiap'),
            'sic'=> $this->input->post('sic'),
            'nome'=> $this->input->post('nome'),
            'motivo'=> $this->input->post('motivo'),
            'obs'=> $this->input->post('obs'),
            'destino'=> $this->input->post('destino'),
            'cadastrante'=>  $this->session->userdata("nomecompleto"),
            'funcaocadastrante'=>  $this->session->userdata("funcao"),
            'matriculacadastrante'=>  $this->session->userdata("matricula"),
            'documentacao'=> $this->input->post('documentacao')
            );
        $this->db->insert('tbl_enterno', $data);

    }

    public function updateadmine($id, $atualizar){
        $this->db->where('id', $id);
        return $this->db->update("tbl_enterno", $atualizar);

    }
    public function showsse($id){
        return $this->db->get_where('tbl_enterno', array(
            "id" => $id
        ))->row_array();
    }




}