<?php

require APPPATH . 'libraries/REST_Controller.php';

class ApiPresos extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Api_model"); // carreaga a model do agente
    }

    public function index_get($nomePresos=0){
        if(!empty($nomePresos)){
            $presos = $this->Api_model->PresosId($nomePresos);
        }else{

            $presos = $this->Api_model->Presos();
        }

        $this->response($presos, Rest_Controller::HTTP_OK);
    }
    
}