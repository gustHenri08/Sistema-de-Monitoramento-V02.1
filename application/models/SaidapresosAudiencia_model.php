
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosAudiencia_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    function SaidapresosAudiencia(){ // Função reponsável por cadastrar os presos ao bando de dados: db_presos
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

    

function get_cadastrar_sair_like ()  {

    $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like ('nome',$termo);
     return $this->db->get('tbl_saidaaudiencia')->result();
		

	}


}