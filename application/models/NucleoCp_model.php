<?php

class NucleoCp_model extends CI_model{

    public function  __construct(){
        parent::__construct();
    }

// Area responsável por fazer as consultas na tabela de nucleos (tbl_nucleo)

    /*
    * Traz todos os nucleos do banco de dados.
    */
    public function getNucleo(){
        return $this->db
            ->order_by('nucleo')
            ->get('tbl_nucleo');
    }

    /*
    * Monta um select de options com os cp encontrados.
    */

    public function selectNucleo(){

        $options = "<option value=''>Selecione o Núcleo:</option>";

        $nucleos = $this->getNucleo();

        foreach($nucleos -> result() as $nucleo){
            $options .= "<option value='{$nucleo->id}'>{$nucleo->nucleo}</option>".PHP_EOL;
        }

        return $options;
    }

// Area responsável por fazer as consultas na tabela de CP (tbl_cp)
    
    /*
    * Traz todos os Cp's do nucleo informado
    */

    public function getCpByNucleo($idNucleo = null){

        return $this->db
            ->where("idNucleo", $idNucleo)
            ->order_by('cp')
            ->get('tbl_cp');

    }

    /*
    * Monta um select com os Cps(Centro Prisionais)
    */

    public function selectCp($idNucleo = null){

        $cps = $this->getCpByNucleo($idNucleo);

        $options = "<option >Selecione o Centro Prisional:</option>";

        foreach ($cps -> result() as $cp){
            $options.= "<option value='{$cp->id}'>$cp->cp</option>".PHP_EOL;
        }
        return $options;
    }
}