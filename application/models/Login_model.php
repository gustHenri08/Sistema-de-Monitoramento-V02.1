<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function verifica($login, $senha){

        //Model responsavel por fazer a verificar se existe login e senha cadastrados no banco de dados 

        $this->db->where('login', $login);
        $this->db->where('senha', $senha);        
        $user = $this->db->get("tbl_agente")->row_array();
        return $user;
    }

}