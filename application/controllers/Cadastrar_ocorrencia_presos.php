<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar_ocorrencia_presos extends CI_Controller{

    public function index(){

        $this->load->view('cadastrar-ocorrencia-presos-view');
    }
}
