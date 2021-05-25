<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
 
    //Inicio Dados do Agente
        public function Agente(){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados
            return $this->db->get("tbl_agente")->result();

            //Função envia os dados dos agentes para o controller de 'api/ApiAgente'
        }

        public function AgenteId($nomeAgente){ // Função responsável por ir ao banco buscar os agentes cadastrados no banco de dados atraves do Nome ou letra contida no nome

            //Função envia os dados dos agentes para o controller de 'api/ApiAgente'

            $this->db->like('nomecompleto', $nomeAgente);
            $query = $this->db->get('tbl_agente');
            return $query->result_array();
        }

    //Fim Dados dos Agentes


    //Inicio Dados Presos
        public function Presos(){ // Função responsável por ir ao banco buscar os presos cadastrados no banco de dados
            return $this->db->get("tbl_presos")->result();

            //Função envia os dados dos agentes para o controller de 'api/ApiPresos'
        }

        public function PresosId($nomePresos){ // Função responsável por ir ao banco buscar os presos cadastrados no banco de dados atraves do Nome ou letra contida no nome

            //Função envia os dados dos agentes para o controller de 'api/ApiPresos'

            $this->db->like('nome', $nomePresos);
            $query = $this->db->get('tbl_presos');
            return $query->result_array();
        }
    
    //Fim Dados dos Presos
}