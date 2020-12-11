<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosMedica extends CI_Controller{

    public function index(){

        $this->load->view('saida-presosMedica-view');
    }
}
