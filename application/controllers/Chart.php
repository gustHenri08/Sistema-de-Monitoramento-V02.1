<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class Chart extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getinfo_get() {
        $maleCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino'")->row_array();
        $femaleCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino'")->row_array();
        $regimeAbertoCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto'")->row_array();
        $regimeSemiCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto'")->row_array();
        $regimeFechadoCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado'")->row_array();
        $this->response(
            (object) [
                'maleCount' => $maleCount, 
                'femaleCount' => $femaleCount,
                'regimeAberto' => $regimeAbertoCount,
                'regimeSemi' => $regimeSemiCount,
                'regimeFechado' => $regimeFechadoCount
            ]
        , REST_Controller::HTTP_OK);
    }
    public function getexit_get() {
        $value = (object)['alvaraSoltura' => 12, 'delegacia' => 30];
        $this->response($value);
    }
}
?>