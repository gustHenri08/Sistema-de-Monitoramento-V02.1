<?php

class CentroPrisional extends CI_Controller{// Controle Responsável for fazer a relação entre os Nucleos e os CPs

    public function __construct(){
        parent::__construct();
    }

    public function getCps(){

        $idNucleo = $this->input->post('idNucleo');

        
        sleep(1);
        echo $this->NucleoCp_model->selectCp($idNucleo);
    }
}