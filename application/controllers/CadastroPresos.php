<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroPresos extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('Presos_model');//carregando o model dos presos
        $nome = $this->session->userdata("nomecompleto");//Variável que será usada para conferir se tem um nome em uma session
        if($nome == ""){ //Responsável por fazer o bloqueio das telas se não tiver uma session com dados registrados
            redirect("Login");
        }else{}
    }

/*Funções referentes as view de agente */

    public function index(){
      $this->load->view('agentes/cadastros/cadastrar-presos-view');
    }

    public function create(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $sic = $this->input->post('sic');
        $nsiap = $this->input->post('nsiap');

        if($sic == "" && !$this->Presos_model->verificaSiap($nsiap)){//Função que verifica se a sic está vazio(Não é obrigatorio) e o siap já esta no banco.
            $this->Presos_model->cadastroPresos();
            redirect('Home/entradaPresos');

        }elseif(!$this->Presos_model->verificaSic($sic) && !$this->Presos_model->verificaSiap($nsiap)){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->cadastroPresos();
            redirect('Home/entradaPresos');

        }else{
            redirect('Home/cadastropresos');// Se os dados ja estiverem cadastrados a pessoa será para tela de cadastro(não pode haver duas pessoas com o sic e o siap iguais)
        }
  
    }

    public function editPresos($idpresos){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['detentos'] = $this->Presos_model->showpresos($idpresos);


        $this->load->view('agentes/cadastros/cadastrar-presos-view', $edit);
    }

    public function updatepresos($idpresos){// Recebe os dados de 'cadastro-agente-view' e envia para a funcao update do Agente_Model
        $atualizar = $_POST;
        $sic = $this->input->post('sic');
        $nsiap = $this->input->post('nsiap');
        $nsiapBanco = $this->Presos_model->verificaSiap($nsiap);
        $sicBanco = $this->Presos_model->verificaSic($sic);

        if(!$this->Presos_model->verificaSiap($nsiap)){
            $edit['detentos'] = $this->Presos_model->showpresos($idpresos);
            $this->load->view('agentes/cadastros/cadastrar-presos-view', $edit);// Se o numero do SIAP for trocado a pessoa será redirecionada a tela de cadastro

        }elseif($sic == 0 && $nsiap == $nsiapBanco['nsiap']){//Função que verifica se a sic está vazio(Não é obrigatorio) e o siap já esta no banco.
            $this->Presos_model->updatepresos($idpresos, $atualizar);
            redirect('Home/entradaPresos');

        }elseif(!$this->Presos_model->verificaSic($sic) && $nsiap == $nsiapBanco['nsiap']){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->updatepresos($idpresos, $atualizar);
            redirect('Home/entradaPresos');

        }elseif($sic == $sicBanco['sic'] && $nsiap == $nsiapBanco['nsiap']){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->updatepresos($idpresos, $atualizar);
            redirect('Home/entradaPresos');

        }else{
            $edit['detentos'] = $this->Presos_model->showpresos($idpresos);
            $this->load->view('agentes/cadastros/cadastrar-presos-view', $edit);// Se os dados ja estiverem cadastrados a pessoa será para tela de edição(não pode haver duas pessoas com o sic e o siap iguais)
        }

    }

/*Funções referentes as view de administrador */

    public function indexAdmin(){
        $this->load->view('administrador/cadastros/cadastrar-presos-view-admin');
    }
  
    public function createAdmin(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $sic = $this->input->post('sic');
        $nsiap = $this->input->post('nsiap');

        if($sic == "" && !$this->Presos_model->verificaSiap($nsiap)){//Função que verifica se a sic está vazio(Não é obrigatorio) e o siap já esta no banco.
            $this->Presos_model->cadastroPresos();
            redirect('Home/entradaPresosAdmin');

        }elseif(!$this->Presos_model->verificaSic($sic) && !$this->Presos_model->verificaSiap($nsiap)){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->cadastroPresos();
            redirect('Home/entradaPresosAdmin');

        }else{
            redirect('Home/cadastropresosAdmin');// Se os dados ja estiverem cadastrados a pessoa será para tela de edição(não pode haver duas pessoas com o sic e o siap iguais)
        }
  
    }
  
    public function editPresosAdmin($idpresos){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
          $edit['detentos'] = $this->Presos_model->showpresos($idpresos);
  
  
          $this->load->view('administrador/cadastros/cadastrar-presos-view-admin', $edit);
    }
  
    public function updatepresosAdmin($idpresos){// Recebe os dados de 'cadastro-agente-view' e envia para a funcao update do Agente_Model
        $atualizar = $_POST;
        $sic = $this->input->post('sic');
        $nsiap = $this->input->post('nsiap');
        $nsiapBanco = $this->Presos_model->verificaSiap($nsiap);
        $sicBanco = $this->Presos_model->verificaSic($sic);

        if(!$this->Presos_model->verificaSiap($nsiap)){
            $edit['detentos'] = $this->Presos_model->showpresos($idpresos);
            $this->load->view('administrador/cadastros/cadastrar-presos-view-admin', $edit);// Se o numero do SIAP for trocado a pessoa será redirecionada a tela de cadastro

        }elseif($sic == 0 && $nsiap == $nsiapBanco['nsiap']){//Função que verifica se a sic está vazio(Não é obrigatorio) e o siap já esta no banco.
            $this->Presos_model->updatepresos($idpresos, $atualizar);
            redirect('Home/entradaPresosAdmin');

        }elseif(!$this->Presos_model->verificaSic($sic) && $nsiap == $nsiapBanco['nsiap']){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->updatepresos($idpresos, $atualizar);
            redirect('Home/entradaPresosAdmin');

        }elseif($sic == $sicBanco['sic'] && $nsiap == $nsiapBanco['nsiap']){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->updatepresos($idpresos, $atualizar);
            redirect('Home/entradaPresosAdmin');

        }else{
            $edit['detentos'] = $this->Presos_model->showpresos($idpresos);
            $this->load->view('administrador/cadastros/cadastrar-presos-view-admin', $edit);// Se os dados ja estiverem cadastrados a pessoa será para tela de edição(não pode haver duas pessoas com o sic e o siap iguais)
        }
          
    }


}
