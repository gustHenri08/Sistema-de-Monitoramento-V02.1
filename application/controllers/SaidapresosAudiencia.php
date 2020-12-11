<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaidapresosAudiencia extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('SaidapresosAudiencia_model');//carregando o model dos presos
    }

    public function index(){
        
        $this->db->select('*');
        $dados['tbl_saidaaudiencia'] = $this->db->get('tbl_saidaaudiencia')->result();
        $this->load->view('saida-presosAudiencia-view',$dados);
    }

    public function audiencia(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->load->view('cadastrar_audiencia_view');
    }

    public function pesquisar(){
        
        $this->load->model('SaidapresosAudiencia_model','tbl_saidaaudiencia');
        $dados['tbl_saidaaudiencia'] = $this->cadastrar_sair->get_cadastrar_sair_like();
        $this->load->view('saida-presosAudiencia-view',$dados);
        
    }

    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $this->SaidapresosAudiencia_model->SaidapresosAudiencia();
        redirect('saidapresosAudiencia');
    }


}
