<?php

require APPPATH . 'libraries/REST_Controller.php';

class ApiAgente extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Api_model"); // carreaga a model do agente
    }

    public function index_get($nomeAgente=0){
        if(!empty($nomeAgente)){
            $agente = $this->Api_model->AgenteId($nomeAgente);
        }else{

            $agente = $this->Api_model->Agente();
        }

        $this->response($agente, Rest_Controller::HTTP_OK);
    }
    
}