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
        $alvaraCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Alvará de Soltura'")->row_array();
        $delegCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia'")->row_array();
        $domicCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID'")->row_array();
        $evasaoCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão'")->row_array();
        $fimPrazoCivilCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil'")->row_array();
        $fimPrazoTempCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario'")->row_array();
        $fugaCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga'")->row_array();
        $HarmCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado'")->row_array();
        $condCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional'")->row_array();
        $obitoCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito'")->row_array();
        $obitoCVLICount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI'")->row_array();
        $PrisaoDomiCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar'")->row_array();
        $ProgressRegimeCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime'")->row_array();
        $transfCpCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP'")->row_array();
        $transfUfCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF'")->row_array();
        $transfUpCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP'")->row_array();
        $transitoCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito'")->row_array();
        $outrosCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros'")->row_array();
        $this->response(
            (object)[
                'alvaraCount' =>  $alvaraCount, 
                'delegCount' => $delegCount,
                'domicCount' => $domicCount,
                'evasaoCount' => $evasaoCount,
                'fimPrazoCivilCount' => $fimPrazoCivilCount,
                'fimprazoTempCount' => $fimPrazoTempCount,
                'fugaCount' =>  $fugaCount, 
                'HarmCount' => $HarmCount,
                'condCount' => $condCount,
                'obitoCount' => $obitoCount,
                'obitoCVLICount' =>  $obitoCVLICount, 
                'PrisaoDomiCount' => $PrisaoDomiCount,
                'ProgressRegimeCount' => $ProgressRegimeCount,
                'transfCpCount' => $transfCpCount ,
                'transfUfCount' => $transfUfCount,
                'transfUpCount' =>  $transfUpCount, 
                'transitoCount' => $transitoCount,
                'outrosCount' => $outrosCount
            ]
        );
    }

    public function getEntrada_get() {
        $expiraPrazoCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo'")->row_array();
        $mandadoPrisCivilCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil'")->row_array();
        $mandadoPrisPrevCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva'")->row_array();
        $mandadoPrisTempCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária'")->row_array();
        $mandadoRecolhimentoCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento'")->row_array();
        $recapturaCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão'")->row_array();
        $transferenciaCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência'")->row_array();
        $transitoCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito'")->row_array();
        $outrosCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCount' => $expiraPrazoCount, 
                'mandadoPrisCivilCount' => $mandadoPrisCivilCount,
                'mandadoPrisPrevCount' => $mandadoPrisPrevCount,
                'mandadoPrisTempCount' => $mandadoPrisTempCount,
                'mandadoRecolhimentoCount' => $mandadoRecolhimentoCount,
                'recapturaCount' => $recapturaCount, 
                'transferenciaCount' => $transferenciaCount,
                'transitoCount' => $transitoCount,
                'outrosCount' => $outrosCount
            ]
        , REST_Controller::HTTP_OK);
    }
}
?>