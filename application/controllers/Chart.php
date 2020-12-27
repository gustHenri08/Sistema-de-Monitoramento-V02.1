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
                'fimPrazoTempCount' => $fimPrazoTempCount,
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
            ],
            REST_Controller::HTTP_OK
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
        $transito2Count = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito'")->row_array();
        $outros2Count = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCount' => $expiraPrazoCount, 
                'mandadoPrisCivilCount' => $mandadoPrisCivilCount,
                'mandadoPrisPrevCount' => $mandadoPrisPrevCount,
                'mandadoPrisTempCount' => $mandadoPrisTempCount,
                'mandadoRecolhimentoCount' => $mandadoRecolhimentoCount,
                'recapturaCount' => $recapturaCount, 
                'transferenciaCount' => $transferenciaCount,
                'transito2Count' => $transito2Count,
                'outros2Count' => $outros2Count
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getAutorizaSaida_get() {
        $audienciaCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia")->row_array();
        $consultaMedCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica'")->row_array();
        $consultaOdontoCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica'")->row_array();
        $EmergenciaCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência'")->row_array();
        $EscoltaFunCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito'")->row_array();
        $ExamesComplexCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos'")->row_array();
        $ExamesLaboratorCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais'")->row_array();
        $outros3Count = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros'")->row_array();
        $this->response(
            (object) [
                'audienciaCount' => $audienciaCount, 
                'consultaMedCount' => $consultaMedCount,
                'consultaOdontoCount' => $consultaOdontoCount,
                'EmergenciaCount' => $EmergenciaCount,
                'EscoltaFunCount' => $EscoltaFunCount,
                'ExamesComplexCount' => $ExamesComplexCount, 
                'ExamesLaboratorCount' => $ExamesLaboratorCount,
                'outros3Count' => $outros3Count
            ]
        , REST_Controller::HTTP_OK);
    }

    //Admin 
    public function getinfoArcoverde_get() {
        $maleCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and nucleo = 'Arcoverde'")->row_array();
        $femaleCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and nucleo = 'Arcoverde'")->row_array();
        $regimeAbertoCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and nucleo = 'Arcoverde'")->row_array();
        $regimeSemiCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and nucleo = 'Arcoverde'")->row_array();
        $regimeFechadoCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and nucleo = 'Arcoverde'")->row_array();
        $this->response(
            (object) [
                'maleCountArcoverde' => $maleCountArcoverde, 
                'femaleCountArcoverde' => $femaleCountArcoverde,
                'regimeAbertoCountArcoverde' => $regimeAbertoCountArcoverde,
                'regimeSemiCountArcoverde' => $regimeSemiCountArcoverde,
                'regimeFechadoCountArcoverde' => $regimeFechadoCountArcoverde
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getinfoCaruaru_get() {
        $maleCountCaruaru = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and nucleo = 'Caruaru'")->row_array();
        $femaleCountCaruaru = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and nucleo = 'Caruaru'")->row_array();
        $regimeAbertoCountCaruaru = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and nucleo = 'Caruaru'")->row_array();
        $regimeSemiCountCaruaru = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and nucleo = 'Caruaru'")->row_array();
        $regimeFechadoCountCaruaru = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and nucleo = 'Caruaru'")->row_array();
        $this->response(
            (object) [
                'maleCountCaruaru' => $maleCountCaruaru, 
                'femaleCountCaruaru' => $femaleCountCaruaru,
                'regimeAbertoCountCaruaru' => $regimeAbertoCountCaruaru,
                'regimeSemiCountCaruaru' => $regimeSemiCountCaruaru,
                'regimeFechadoCountCaruaru' => $regimeFechadoCountCaruaru
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getinfoGaranhuns_get() {
        $maleCountGaranhuns = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and nucleo = 'Garanhuns'")->row_array();
        $femaleCountGaranhuns = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and nucleo = 'Garanhuns'")->row_array();
        $regimeAbertoCountGaranhuns = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and nucleo = 'Garanhuns'")->row_array();
        $regimeSemiCountGaranhuns = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and nucleo = 'Garanhuns'")->row_array();
        $regimeFechadoCountGaranhuns = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and nucleo = 'Garanhuns'")->row_array();
        $this->response(
            (object) [
                'maleCountGaranhuns' => $maleCountGaranhuns, 
                'femaleCountGaranhuns' => $femaleCountGaranhuns,
                'regimeAbertoCountGaranhuns' => $regimeAbertoCountGaranhuns,
                'regimeSemiCountGaranhuns' => $regimeSemiCountGaranhuns,
                'regimeFechadoCountGaranhuns' => $regimeFechadoCountGaranhuns
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getinfoLagoa_get() {
        $maleCountLagoa = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and nucleo = 'Lagoa'")->row_array();
        $femaleCountLagoa = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and nucleo = 'Lagoa'")->row_array();
        $regimeAbertoCountLagoa = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and nucleo = 'Lagoa'")->row_array();
        $regimeSemiCountLagoa = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and nucleo = 'Lagoa'")->row_array();
        $regimeFechadoCountLagoa = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and nucleo = 'Lagoa'")->row_array();
        $this->response(
            (object) [
                'maleCountLagoa' => $maleCountLagoa, 
                'femaleCountLagoa' => $femaleCountLagoa,
                'regimeAbertoCountLagoa' => $regimeAbertoCountLagoa,
                'regimeSemiCountLagoa' => $regimeSemiCountLagoa,
                'regimeFechadoCountLagoa' => $regimeFechadoCountLagoa
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getinfoPetrolina_get() {
        $maleCountPetrolina = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and nucleo = 'Petrolina'")->row_array();
        $femaleCountPetrolina = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and nucleo = 'Petrolina'")->row_array();
        $regimeAbertoCountPetrolina = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and nucleo = 'Petrolina'")->row_array();
        $regimeSemiCountPetrolina = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and nucleo = 'Petrolina'")->row_array();
        $regimeFechadoCountPetrolina = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and nucleo = 'Petrolina'")->row_array();
        $this->response(
            (object) [
                'maleCountPetrolina' => $maleCountPetrolina, 
                'femaleCountPetrolina' => $femaleCountPetrolina,
                'regimeAbertoCountPetrolina' => $regimeAbertoCountPetrolina,
                'regimeSemiCountPetrolina' => $regimeSemiCountPetrolina,
                'regimeFechadoCountPetrolina' => $regimeFechadoCountPetrolina
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getinfoSalgueiro_get() {
        $maleCountSalgueiro = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and nucleo = 'Salgueiro'")->row_array();
        $femaleCountSalgueiro = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and nucleo = 'Salgueiro'")->row_array();
        $regimeAbertoCountSalgueiro = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and nucleo = 'Salgueiro'")->row_array();
        $regimeSemiCountSalgueiro = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and nucleo = 'Salgueiro'")->row_array();
        $regimeFechadoCountSalgueiro = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and nucleo = 'Salgueiro'")->row_array();
        $this->response(
            (object) [
                'maleCountSalgueiro' => $maleCountSalgueiro, 
                'femaleCountSalgueiro' => $femaleCountSalgueiro,
                'regimeAbertoCountSalgueiro' => $regimeAbertoCountSalgueiro,
                'regimeSemiCountSalgueiro' => $regimeSemiCountSalgueiro,
                'regimeFechadoCountSalgueiro' => $regimeFechadoCountSalgueiro
            ]
        , REST_Controller::HTTP_OK);
    }
}
?>