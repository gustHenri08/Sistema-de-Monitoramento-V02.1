<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $nome = $this->session->userdata("nomecompleto");//Variável que será usada para conferir se tem um nome em uma session
        if($nome == ""){ //Responsável por fazer o bloqueio das telas se não tiver uma session com dados registrados
            redirect("Login");
        }else{}
    }

/* Views Referentes ao Acesso do Agente */

    // <-- Inicio-Home -->

    public function index()
    {
        $this->load->view('agentes/home-view'); // Carrega a view(Tela) Home; 
    }

    // <-- Final-Home -->

    // <-- Inicio-EntradaDeDetentos -->

    public function entradaPresos()
    {
        $this->load->model("Presos_model");
        $data['presos'] = $this->Presos_model->presoscadastrados();

        $this->load->view("agentes/entrada-presos-view", $data); // Carrega a view(Tela) Entrada de Detentos do Admin;
    }

    public function cadastropresos()
    { //Carrega a Função cadastroPresos que está no Presos_model

        $this->load->view("agentes/cadastros/cadastrar-presos-view");

    }

    // <-- Final-EntradaDeDetentos -->
    
    // <-- Inicio-Ocorrências -->

    public function registroOcorrencias()
    {
        $this->load->view('agentes/ocorrencias-view'); // Carrega a view(Tela) Ocorrências;
    }

    public function cadastrarOcorrencias(){

        $this->load->view('agentes/cadastros/cadastrar-ocorrencia-view');
    }

    public function outrasOcorrencias()
    {
        $this->load->view('agentes/outras-ocorrencias-view'); // Carrega a view(Tela) outras Ocorrências;
    }

    public function revistasApreensoes()
    {
        $this->load->view('agentes/revistas-e-apreensoes-view'); // Carrega a view(Tela) Revistas e Apreensões;
    }

    // <-- Final-Ocorrências -->

    // <-- Inicio-Relação Aberto e Semi-Aberto -->

    public function abertoSemiaberto()
    {
        $this->load->view('agentes/semiAberto-e-aberto-view'); // Carrega a view(Tela) Relação Aberto e Semi-Aberto;
    }

    // <-- Final-Relação Aberto e Semi Aberto -->

    // <-- Inicio-Saida de Detentos -->

    public function saidaCadeiaPublica()
    {   $this->load->model('cadastrar_sair_model');//carregando o model dos presos
        $data['saidadetentos'] = $this->cadastrar_sair_model->cadastrados();
        $this->load->view('agentes/saida-presos-view',$data); // Carrega a view(Tela) Saida da Cadeia Publica;
    }

    public function saidaAudiencia()
    {
        $this->load->model('SaidapresosAudiencia_model');
        $data['saidadetentos'] = $this->SaidapresosAudiencia_model->cadastrados();
        $this->load->view('agentes/saida-presosAudiencia-view',$data); // Carrega a view(Tela) Saida para Audiencia;
    }

    public function saidaMedica()
        {   $this->load->model('SaidapresosAudiencia_model');//carregando o model dos presos
            $data['saidadetentos'] = $this->SaidapresosAudiencia_model->cadastrados();
            $this->load->view('agentes/saida-presosMedica-view',$data);  // Carrega a view(Tela) Saida Medica;
         }

    
    
    public function transitoInterno()
    {
        $this->load->view('agentes/transito-interno-view'); // Carrega a view(Tela) Trânsito Interno;
    }

    public function transitoExterno() 
    {
        $this->load->view('agentes/transito-externo-view'); // Carrega a view(Tela) Trânsito Externo;
    }

    // <-- Final-Trânsito -->


/* Views Referentes ao Acesso do Administrador */

    // <-- Inicio-AdminHome -->

    public function adminHome()
    {
        $this->load->view('administrador/admin-view'); // Carrega a view(Tela) AdminHome;
    }

    // <-- Final-AdminHome -->

    // <-- Inicio-Agentes -->

    public function agentes()
    {
        $this->load->model("Agente_model");
        $data['agent'] = $this->Agente_model->cadastrados();

        $this->load->view('administrador/agente-view', $data); // Carrega a view de login
        //$data -> envia os dados para a 'agente-view'
    }

    public function cadastrarAgente()
    {
        $this->load->view("administrador/cadastros/cadastro-agente-view"); // Função ao clicar no botão cadastrar chama a view de cadastro de agentes;
    }

    // <-- Final-Agentes -->

    // <-- Inicio-Entrada De Detentos Admin -->

    public function entradaPresosAdmin()
    {
        $this->load->model("Presos_model");
        $data['presos'] = $this->Presos_model->presoscadastrados();

        $this->load->view("administrador/entrada-presos-admin", $data); // Carrega a view(Tela) Entrada de Detentos do Admin;
    }

    public function cadastropresosAdmin()
    { //Carrega a Função cadastroPresos que está no Presos_model

        $this->load->view("administrador/cadastros/cadastrar-presos-view-admin");

    }

    // <-- Final-Entrada De Detentos Admin -->

    // <-- Inicio-Ocorrências Admin -->

    public function registroOcorrenciasAdmin()
    {
        $this->load->view('administrador/ocorrencias-view-admin'); // Carrega a view(Tela) Ocorrências do Admin;
    }

    public function cadastrarOcorrenciasAdmin(){

        $this->load->view('administrador/cadastros/cadastrar-ocorrencia-view-admin');
    }

    public function outrasOcorrenciasAdmin() 
    {
        $this->load->view('administrador/outras-ocorrencias-view-admin'); // Carrega a view(Tela) outras Ocorrências do Admin;
    }

    public function revistasApreensoesAdmin()
    {
        $this->load->view('administrador/revistas-e-apreensoes-view-admin'); // Carrega a view(Tela) Revistas e Apreensões do Admin;
    }

    // <-- Final-Ocorrências Admin -->

    // <-- Inicio-Relação Aberto e Semi Aberto Admin-->

    public function abertoSemiabertoAdmin()
    {
        $this->load->view('administrador/semiAberto-e-aberto-view-admin'); // Carrega a view(Tela) Relação Aberto e Semi-Aberto do Admin;
    }

    // <-- Final-Relação Aberto e Semi Aberto Admin-->

    // <-- Inicio-Saida de Detentos Admin-->
    public function saidaCadeiaPublicaAdmin()
    {
        $this->load->model('cadastrar_sair_model');//carregando o model dos presos
        $data['saidadetentos'] = $this->cadastrar_sair_model->cadastrados();
        $this->load->view('administrador/saida-presos-view-admin',$data); // Carrega a view(Tela) Saida da Cadeia Publica do Admin;
    }

    public function saidaAudienciaAdmin()
    {
        $this->load->model('SaidapresosAudiencia_model');
        $data['saidadetentos'] = $this->SaidapresosAudiencia_model->cadastrados(); 
        $this->load->view('administrador/saida-presosAudiencia-view-admin',$data); // Carrega a view(Tela) Saida para Audiencia do Admin;
    }


    public function saidaMedicaAdmin()
    {
       
        $this->load->model('SaidapresosAudiencia_model');//carregando o model dos presos
        $data['saidadetentos'] = $this->SaidapresosAudiencia_model->cadastrados();
        $this->load->view('administrador/saida-presosMedica-view-admin',$data); 
    }

    // <-- Final-Saida de Detentos Admin-->

    // <-- Inicio-Trânsito Admin-->

    public function transitoInternoAdmin()
    {
        $this->load->view('administrador/transito-interno-view-admin'); // Carrega a view(Tela) Trânsito Interno do Admin;
    }

    public function transitoExternoAdmin() 
    {
        $this->load->view('administrador/transito-externo-view-admin'); // Carrega a view(Tela) Trânsito Externo do Admin;
    }

    // <-- Final-Trânsito Admin-->
}
