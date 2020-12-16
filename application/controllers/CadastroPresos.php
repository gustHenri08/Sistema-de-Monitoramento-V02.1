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

        if(!$this->Presos_model->verificaSic($sic) && !$this->Presos_model->verificaSiap($nsiap)){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->cadastroPresos();
            redirect('Home/entradaPresos');

        }else{
            redirect('Home/cadastropresos');// se ja estiver voltará para tela de cadastro
        }
  
      }

    public function editPresos($idpresos){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
        $edit['detentos'] = $this->Presos_model->showpresos($idpresos);


        $this->load->view('agentes/cadastros/cadastrar-presos-view', $edit);
    }

    public function updatepresos($idpresos){// Recebe os dados de 'cadastro-agente-view' e envia para a funcao update do Agente_Model
        $atualizar = $_POST;
        $this->Presos_model->updatepresos($idpresos, $atualizar);
        redirect('Home/entradaPresos');

    }

/*Funções referentes as view de administrador */

    public function indexAdmin(){
        $this->load->view('administrador/cadastros/cadastrar-presos-view-admin');
      }
  
      public function createAdmin(){ // Chama a função responsável pelo cadastro dos presos ao banco de dados
        $sic = $this->input->post('sic');
        $nsiap = $this->input->post('nsiap');

        if(!$this->Presos_model->verificaSic($sic) && !$this->Presos_model->verificaSiap($nsiap)){// Função que verifica se a sic e o siap já esta no banco:
           
            $this->Presos_model->cadastroPresos();
            redirect('Home/entradaPresosAdmin');

        }else{
            redirect('Home/cadastropresosAdmin');// se ja estiver voltará para tela de cadastro
        }
  
      }
  
      public function editPresosAdmin($idpresos){ // Faz o carregamento dos dados de um agente cadastrado atravez da função show no Agente_model
          $edit['detentos'] = $this->Presos_model->showpresos($idpresos);
  
  
          $this->load->view('administrador/cadastros/cadastrar-presos-view-admin', $edit);
      }
  
      public function updatepresosAdmin($idpresos){// Recebe os dados de 'cadastro-agente-view' e envia para a funcao update do Agente_Model
          $atualizar = $_POST;
          $this->Presos_model->updatepresos($idpresos, $atualizar);
          redirect('Home/entradaPresosAdmin');
  
      }


}
