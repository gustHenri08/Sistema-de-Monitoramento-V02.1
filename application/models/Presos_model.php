<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presos_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function cadastroPresos(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
        $data = array(
            'cadeiapublica'=> $this->input->post('cadeiapublica'),
            'nucleo'=> $this->input->post('nucleo'), //Recebe os dados via post
            'dataentrada'=> $this->input->post('dataentrada'),
            'nome'=> $this->input->post('nome'),
            'nomemae'=> $this->input->post('nomemae'),
            'nomepai'=> $this->input->post('nomepai'),
            'motivo'=> $this->input->post('motivo'),
            'origem'=> $this->input->post('origem'),
            'dataprisao'=> $this->input->post('dataprisao'),
            'documentacao'=> $this->input->post('documentacao'),
            'crimerepercurssao'=> $this->input->post('crimerepercurssao'),
            'observacoesgerais'=> $this->input->post('observacoesgerais'),
            'regime'=> $this->input->post('regime'),
            'sexo'=> $this->input->post('sexo'),
            'cadastrante'=>  $this->session->userdata("nomecompleto"),
            'funcaocadastrante'=>  $this->session->userdata("funcao"),
            'matriculacadastrante'=>  $this->session->userdata("matricula"),
            'sic'=> $this->input->post('sic'),
            'nsiap'=> $this->input->post('nsiap')
        );
        $this->db->insert('tbl_presos', $data);

    }

    public function verificaSic($sic){ // Verifica se o sic e o siap que está sendo cadastrada já consta ou não no banco de dados

        $this->db->where('sic', $sic);
        return $this->db->get('tbl_presos')->row_array();
    }

    public function verificaSiap($nsiap){ // Verifica se o sic e o siap que está sendo cadastrada já consta ou não no banco de dados

        $this->db->where('nsiap', $nsiap);
        return $this->db->get('tbl_presos')->row_array();
    }

    public function presoscadastrados(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
        return $this->db->get("tbl_presos")->result_array();

        //Função envia os dados dos agentes para o controller de 'Agente'
    }

    public function buscarPresos($buscapresos){ // Responsável por buscar o preso atraves do campo de busca na view de entrada de presos 
        
        if(empty($buscapresos)){
            return array();

        }else{
            $buscapresos = $this->input->post('buscapresos');

        $this->db->like('nome', $buscapresos);
        $query = $this->db->get('tbl_presos');
        return $query->result_array();
        }

    }

    public function showpresos($idpresos){ // Envia os dados para o controller de 'Cadastro'
        return $this->db->get_where('tbl_presos', array(
            "id" => $idpresos
        ))->row_array();
    }

    public function totalfechado()// função responsável por contar o total de presos em regime Fechado
{
    $query = $this->db->query("SELECT * FROM tbl_presos WHERE regime = 'Fechado'");

    return $query->num_rows();
}

    public function updatepresos($idpresos, $atualizar){ // Recebe os dados do controller de cadastro e atualiza os dados dos presos no banco de dados
        $this->db->where('id', $idpresos);
        return $this->db->update("tbl_presos", $atualizar);

    }

    
}