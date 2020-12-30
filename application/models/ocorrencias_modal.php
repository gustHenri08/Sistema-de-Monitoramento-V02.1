
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
    
        public function cadastrados(){ // Função responsável por ir ao banco buscar os presos cadastrados no banco de dados
            return $this->db->get_where("tbl_presos", array('cadeiapublica' => $this->session->userdata('unidadeprisional')) )->result_array();
        }

        public function cadastradosd(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
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
        $this->db->like('id', $busca);
        $query = $this->db->get('tbl_ocorrencia');
        return $query->result_array(); 	
    }
    
    public function buscadata($busca){
        
        if(empty($busca))
            return array();
        $busca = $this->input->post('busca');
        $this->db->like('data', $busca);
        $query = $this->db->get('tbl_ocorrencia');
        return $query->result_array(); 	
    }

    public function buscaacp($busca){
        
        if(empty($busca))
            return array();
        $busca = $this->input->post('cadeiapublica');
        $this->db->like('cadeiapublica', $busca);
        $query = $this->db->get('tbl_ocorrencia');
        return $query->result_array(); 	
    }


    public function show($idd){
        return $this->db->get_where('tbl_ocorrencia', array(
            "idd" => $idd
        ))->row_array();
    }
    public function shows($id){
        return $this->db->get_where('tbl_presos', array(
            "id" => $id
        ))->row_array();
    }
    
    public function update($idd, $atualizar){
        $this->db->where('idd', $idd);
        return $this->db->update("tbl_ocorrencia", $atualizar);

    }


    public function destroy ($idd){
        $this->db->where('idd', $idd);
        return $this->db->delete("tbl_ocorrencia");

    }

    ///////////////// revista



    function cadastrorevista(){ // Função reponsável por cadastrar os agentes ao bando de dados: db_agente (Cadatro realizado pelo administrador)
        $datamaster = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'), //Recebe os dados via post
            'armasbranca'=> $this->input->post('armasbranca'),
            'coca'=> $this->input->post('coca'),
            'chips'=> $this->input->post('chips'),
            'armasbranca2'=> $this->input->post('armasbranca2'),
            'cola'=> $this->input->post('cola'),
            'armasfogo2'=> $this->input->post('armasfogo2'),
            'corda'=> $this->input->post('corda'),
            'bateria'=> $this->input->post('bateria'),
            'crack'=> $this->input->post('crack'),
            'bebida'=> $this->input->post('bebida'),
            'maconha'=> $this->input->post('maconha'),
            'bebida2'=> $this->input->post('bebida2'),
            'medicacao'=> $this->input->post('medicacao'),
            'carregador'=> $this->input->post('carregador'),
            'municao'=> $this->input->post('municao'),
            'celular'=> $this->input->post('celular'),
            'outro'=> $this->input->post('outro')

        );
        $this->db->insert('tbl_revista', $datamaster);
    }

    public function buscaroutras($busca){
        
        if(empty($busca))
            return array();
        $busca = $this->input->post('busca');
        $this->db->like('id', $busca);
        $query = $this->db->get('tbl_ocorrencia');
        return $query->result_array(); 	
    }

}