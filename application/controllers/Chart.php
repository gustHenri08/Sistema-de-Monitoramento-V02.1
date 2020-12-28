<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
class Chart extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getinfo_get() {
        $cp = $this->session->userdata("unidadeprisional");
        $maleCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and cadeiapublica = '$cp' ")->row_array();
        $femaleCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and cadeiapublica = '$cp' ")->row_array();
        $regimeAbertoCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and cadeiapublica = '$cp' ")->row_array();
        $regimeSemiCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and cadeiapublica = '$cp' ")->row_array();
        $regimeFechadoCount = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and cadeiapublica = '$cp' ")->row_array();
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
        $cp = $this->session->userdata("unidadeprisional");
        $alvaraCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Alvará de Soltura' and cadeiapublica = '$cp'")->row_array();
        $delegCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia' and cadeiapublica = '$cp'")->row_array();
        $domicCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID' and cadeiapublica = '$cp'")->row_array();
        $evasaoCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão' and cadeiapublica = '$cp'")->row_array();
        $fimPrazoCivilCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil' and cadeiapublica = '$cp'")->row_array();
        $fimPrazoTempCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario' and cadeiapublica = '$cp'")->row_array();
        $fugaCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga' and cadeiapublica = '$cp'")->row_array();
        $HarmCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado' and cadeiapublica = '$cp'")->row_array();
        $condCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional' and cadeiapublica = '$cp'")->row_array();
        $obitoCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and cadeiapublica = '$cp'")->row_array();
        $obitoCVLICount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI' and cadeiapublica = '$cp'")->row_array();
        $PrisaoDomiCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar' and cadeiapublica = '$cp'")->row_array();
        $ProgressRegimeCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime' and cadeiapublica = '$cp'")->row_array();
        $transfCpCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP' and cadeiapublica = '$cp'")->row_array();
        $transfUfCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF' and cadeiapublica = '$cp'")->row_array();
        $transfUpCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP' and cadeiapublica = '$cp'")->row_array();
        $transitoCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito' and cadeiapublica = '$cp'")->row_array();
        $outrosCount = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros' and cadeiapublica = '$cp'")->row_array();
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
        $cp = $this->session->userdata("unidadeprisional");
        $expiraPrazoCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo' and cadeiapublica = '$cp'")->row_array();
        $mandadoPrisCivilCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil' and cadeiapublica = '$cp'")->row_array();
        $mandadoPrisPrevCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva' and cadeiapublica = '$cp'")->row_array();
        $mandadoPrisTempCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária' and cadeiapublica = '$cp'")->row_array();
        $mandadoRecolhimentoCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento' and cadeiapublica = '$cp'")->row_array();
        $recapturaCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão' and cadeiapublica = '$cp'")->row_array();
        $transferenciaCount = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência' and cadeiapublica = '$cp'")->row_array();
        $transito2Count = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito' and cadeiapublica = '$cp'")->row_array();
        $outros2Count = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros' and cadeiapublica = '$cp'")->row_array();
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
        $cp = $this->session->userdata("unidadeprisional");
        $audienciaCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia WHERE cadeiapublica = '$cp' ")->row_array();
        $consultaMedCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica' and cadeiapublica = '$cp'")->row_array();
        $consultaOdontoCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica' and cadeiapublica = '$cp'")->row_array();
        $EmergenciaCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência' and cadeiapublica = '$cp'")->row_array();
        $EscoltaFunCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and cadeiapublica = '$cp'")->row_array();
        $ExamesComplexCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos' and cadeiapublica = '$cp'")->row_array();
        $ExamesLaboratorCount = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais' and cadeiapublica = '$cp'")->row_array();
        $outros3Count = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros' and cadeiapublica = '$cp'")->row_array();
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
        $maleCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Masculino' and nucleo = 'Lagoa'")->row_array();
        $femaleCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE sexo = 'Feminino' and nucleo = 'Lagoa'")->row_array();
        $regimeAbertoCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Aberto' and nucleo = 'Lagoa'")->row_array();
        $regimeSemiCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Semi-Aberto' and nucleo = 'Lagoa'")->row_array();
        $regimeFechadoCountArcoverde = $this->db->query("SELECT COUNT(*) as SEX_COUNT FROM tbl_presos WHERE regime = 'Fechado' and nucleo = 'Lagoa'")->row_array();
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
    
    public function getEntradaArcoverde_get() {
        $expiraPrazoCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo' and nucleo = 'Lagoa'")->row_array();
        $mandadoPrisCivilCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil' and nucleo = 'Lagoa'")->row_array();
        $mandadoPrisPrevCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva' and nucleo = 'Lagoa'")->row_array();
        $mandadoPrisTempCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária' and nucleo = 'Lagoa'")->row_array();
        $mandadoRecolhimentoCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento' and nucleo = 'Lagoa'")->row_array();
        $recapturaCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão' and nucleo = 'Lagoa'")->row_array();
        $transferenciaCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência' and nucleo = 'Lagoa'")->row_array();
        $transito2CountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito' and nucleo = 'Lagoa'")->row_array();
        $outros2CountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros' and nucleo = 'Lagoa'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCountArcoverde' => $expiraPrazoCountArcoverde, 
                'mandadoPrisCivilCountArcoverde' => $mandadoPrisCivilCountArcoverde,
                'mandadoPrisPrevCountArcoverde' => $mandadoPrisPrevCountArcoverde,
                'mandadoPrisTempCountArcoverde' => $mandadoPrisTempCountArcoverde,
                'mandadoRecolhimentoCountArcoverde' => $mandadoRecolhimentoCountArcoverde,
                'recapturaCountArcoverde' => $recapturaCountArcoverde, 
                'transferenciaCountArcoverde' => $transferenciaCountArcoverde,
                'transito2CountArcoverde' => $transito2CountArcoverde,
                'outros2CountArcoverde' => $outros2CountArcoverde
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getEntradaCaruaru_get() {
        $expiraPrazoCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo' and nucleo = 'Caruaru'")->row_array();
        $mandadoPrisCivilCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil' and nucleo = 'Caruaru'")->row_array();
        $mandadoPrisPrevCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva' and nucleo = 'Caruaru'")->row_array();
        $mandadoPrisTempCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária' and nucleo = 'Caruaru'")->row_array();
        $mandadoRecolhimentoCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento' and nucleo = 'Caruaru'")->row_array();
        $recapturaCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão' and nucleo = 'Caruaru'")->row_array();
        $transferenciaCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência' and nucleo = 'Caruaru'")->row_array();
        $transito2CountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito' and nucleo = 'Caruaru'")->row_array();
        $outros2CountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros' and nucleo = 'Caruaru'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCountCaruaru' => $expiraPrazoCountCaruaru, 
                'mandadoPrisCivilCountCaruaru' => $mandadoPrisCivilCountCaruaru,
                'mandadoPrisPrevCountCaruaru' => $mandadoPrisPrevCountCaruaru,
                'mandadoPrisTempCountCaruaru' => $mandadoPrisTempCountCaruaru,
                'mandadoRecolhimentoCountCaruaru' => $mandadoRecolhimentoCountCaruaru,
                'recapturaCountCaruaru' => $recapturaCountCaruaru, 
                'transferenciaCountCaruaru' => $transferenciaCountCaruaru,
                'transito2CountCaruaru' => $transito2CountCaruaru,
                'outros2CountCaruaru' => $outros2CountCaruaru
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getEntradaGaranhuns_get() {
        $expiraPrazoCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo' and nucleo = 'Garanhuns'")->row_array();
        $mandadoPrisCivilCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil' and nucleo = 'Garanhuns'")->row_array();
        $mandadoPrisPrevCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva' and nucleo = 'Garanhuns'")->row_array();
        $mandadoPrisTempCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária' and nucleo = 'Garanhuns'")->row_array();
        $mandadoRecolhimentoCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento' and nucleo = 'Garanhuns'")->row_array();
        $recapturaCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão' and nucleo = 'Garanhuns'")->row_array();
        $transferenciaCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência' and nucleo = 'Garanhuns'")->row_array();
        $transito2CountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito' and nucleo = 'Garanhuns'")->row_array();
        $outros2CountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros' and nucleo = 'Garanhuns'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCountGaranhuns' => $expiraPrazoCountGaranhuns, 
                'mandadoPrisCivilCountGaranhuns' => $mandadoPrisCivilCountGaranhuns,
                'mandadoPrisPrevCountGaranhuns' => $mandadoPrisPrevCountGaranhuns,
                'mandadoPrisTempCountGaranhuns' => $mandadoPrisTempCountGaranhuns,
                'mandadoRecolhimentoCountGaranhuns' => $mandadoRecolhimentoCountGaranhuns,
                'recapturaCountGaranhuns' => $recapturaCountGaranhuns, 
                'transferenciaCountGaranhuns' => $transferenciaCountGaranhuns,
                'transito2CountGaranhuns' => $transito2CountGaranhuns,
                'outros2CountGaranhuns' => $outros2CountGaranhuns
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getEntradaLagoa_get() {
        $expiraPrazoCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo' and nucleo = 'Lagoa'")->row_array();
        $mandadoPrisCivilCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil' and nucleo = 'Lagoa'")->row_array();
        $mandadoPrisPrevCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva' and nucleo = 'Lagoa'")->row_array();
        $mandadoPrisTempCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária' and nucleo = 'Lagoa'")->row_array();
        $mandadoRecolhimentoCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento' and nucleo = 'Lagoa'")->row_array();
        $recapturaCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão' and nucleo = 'Lagoa'")->row_array();
        $transferenciaCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência' and nucleo = 'Lagoa'")->row_array();
        $transito2CountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito' and nucleo = 'Lagoa'")->row_array();
        $outros2CountLagoa = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros' and nucleo = 'Lagoa'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCountLagoa' => $expiraPrazoCountLagoa, 
                'mandadoPrisCivilCountLagoa' => $mandadoPrisCivilCountLagoa,
                'mandadoPrisPrevCountLagoa' => $mandadoPrisPrevCountLagoa,
                'mandadoPrisTempCountLagoa' => $mandadoPrisTempCountLagoa,
                'mandadoRecolhimentoCountLagoa' => $mandadoRecolhimentoCountLagoa,
                'recapturaCountLagoa' => $recapturaCountLagoa, 
                'transferenciaCountLagoa' => $transferenciaCountLagoa,
                'transito2CountLagoa' => $transito2CountLagoa,
                'outros2CountLagoa' => $outros2CountLagoa
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getEntradaPetrolina_get() {
        $expiraPrazoCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo' and nucleo = 'Petrolina'")->row_array();
        $mandadoPrisCivilCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil' and nucleo = 'Petrolina'")->row_array();
        $mandadoPrisPrevCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva' and nucleo = 'Petrolina'")->row_array();
        $mandadoPrisTempCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária' and nucleo = 'Petrolina'")->row_array();
        $mandadoRecolhimentoCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento' and nucleo = 'Petrolina'")->row_array();
        $recapturaCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão' and nucleo = 'Petrolina'")->row_array();
        $transferenciaCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência' and nucleo = 'Petrolina'")->row_array();
        $transito2CountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito' and nucleo = 'Petrolina'")->row_array();
        $outros2CountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros' and nucleo = 'Petrolina'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCountPetrolina' => $expiraPrazoCountPetrolina, 
                'mandadoPrisCivilCountPetrolina' => $mandadoPrisCivilCountPetrolina,
                'mandadoPrisPrevCountPetrolina' => $mandadoPrisPrevCountPetrolina,
                'mandadoPrisTempCountPetrolina' => $mandadoPrisTempCountPetrolina,
                'mandadoRecolhimentoCountPetrolina' => $mandadoRecolhimentoCountPetrolina,
                'recapturaCountPetrolina' => $recapturaCountPetrolina, 
                'transferenciaCountPetrolina' => $transferenciaCountPetrolina,
                'transito2CountPetrolina' => $transito2CountPetrolina,
                'outros2CountPetrolina' => $outros2CountPetrolina
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getEntradaSalgueiro_get() {
        $expiraPrazoCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Expiração de Prazo' and nucleo = 'Salgueiro'")->row_array();
        $mandadoPrisCivilCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Civil' and nucleo = 'Salgueiro'")->row_array();
        $mandadoPrisPrevCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Preventiva' and nucleo = 'Salgueiro'")->row_array();
        $mandadoPrisTempCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Prisão Temporária' and nucleo = 'Salgueiro'")->row_array();
        $mandadoRecolhimentoCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Mandado de Recolhimento' and nucleo = 'Salgueiro'")->row_array();
        $recapturaCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Recaptura - Mandado de Prisão' and nucleo = 'Salgueiro'")->row_array();
        $transferenciaCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Transferência' and nucleo = 'Salgueiro'")->row_array();
        $transito2CountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Trânsito' and nucleo = 'Salgueiro'")->row_array();
        $outros2CountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_ENT_COUNT FROM tbl_presos WHERE motivo = 'Outros' and nucleo = 'Salgueiro'")->row_array();
        $this->response(
            (object) [
                'expiraPrazoCountSalgueiro' => $expiraPrazoCountSalgueiro, 
                'mandadoPrisCivilCountSalgueiro' => $mandadoPrisCivilCountSalgueiro,
                'mandadoPrisPrevCountSalgueiro' => $mandadoPrisPrevCountSalgueiro,
                'mandadoPrisTempCountSalgueiro' => $mandadoPrisTempCountSalgueiro,
                'mandadoRecolhimentoCountSalgueiro' => $mandadoRecolhimentoCountSalgueiro,
                'recapturaCountSalgueiro' => $recapturaCountSalgueiro, 
                'transferenciaCountSalgueiro' => $transferenciaCountSalgueiro,
                'transito2CountSalgueiro' => $transito2CountSalgueiro,
                'outros2CountSalgueiro' => $outros2CountSalgueiro
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getexitArcoverde_get() {
        $alvaraCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Alvará de Soltura' and nucleo = 'Arcoverde'")->row_array();
        $delegCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia' and nucleo = 'Arcoverde'")->row_array();
        $domicCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID' and nucleo = 'Arcoverde'")->row_array();
        $evasaoCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão' and nucleo = 'Arcoverde'")->row_array();
        $fimPrazoCivilCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil' and nucleo = 'Arcoverde'")->row_array();
        $fimPrazoTempCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario' and nucleo = 'Arcoverde'")->row_array();
        $fugaCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga' and nucleo = 'Arcoverde'")->row_array();
        $HarmCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado' and nucleo = 'Arcoverde'")->row_array();
        $condCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional' and nucleo = 'Arcoverde'")->row_array();
        $obitoCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Arcoverde'")->row_array();
        $obitoCVLICountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI' and nucleo = 'Arcoverde'")->row_array();
        $PrisaoDomiCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar' and nucleo = 'Arcoverde'")->row_array();
        $ProgressRegimeCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime' and nucleo = 'Arcoverde'")->row_array();
        $transfCpCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP' and nucleo = 'Arcoverde'")->row_array();
        $transfUfCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF' and nucleo = 'Arcoverde'")->row_array();
        $transfUpCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP' and nucleo = 'Arcoverde'")->row_array();
        $transitoCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito' and nucleo = 'Arcoverde'")->row_array();
        $outrosCountArcoverde = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros' and nucleo = 'Arcoverde'")->row_array();
        $this->response(
            (object)[
                'alvaraCountArcoverde' =>  $alvaraCountArcoverde, 
                'delegCountArcoverde' => $delegCountArcoverde,
                'domicCountArcoverde' => $domicCountArcoverde,
                'evasaoCountArcoverde' => $evasaoCountArcoverde,
                'fimPrazoCivilCountArcoverde' => $fimPrazoCivilCountArcoverde,
                'fimPrazoTempCountArcoverde' => $fimPrazoTempCountArcoverde,
                'fugaCountArcoverde' =>  $fugaCountArcoverde, 
                'HarmCountArcoverde' => $HarmCountArcoverde,
                'condCountArcoverde' => $condCountArcoverde,
                'obitoCountArcoverde' => $obitoCountArcoverde,
                'obitoCVLICountArcoverde' =>  $obitoCVLICountArcoverde, 
                'PrisaoDomiCountArcoverde' => $PrisaoDomiCountArcoverde,
                'ProgressRegimeCountArcoverde' => $ProgressRegimeCountArcoverde,
                'transfCpCountArcoverde' => $transfCpCountArcoverde ,
                'transfUfCountArcoverde' => $transfUfCountArcoverde,
                'transfUpCountArcoverde' =>  $transfUpCountArcoverde, 
                'transitoCountArcoverde' => $transitoCountArcoverde,
                'outrosCountArcoverde' => $outrosCountArcoverde
            ],
            REST_Controller::HTTP_OK
        );
    }


    public function getexitCaruaru_get() {
        $alvaraCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Alvará de Soltura' and nucleo = 'Caruaru'")->row_array();
        $delegCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia' and nucleo = 'Caruaru'")->row_array();
        $domicCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID' and nucleo = 'Caruaru'")->row_array();
        $evasaoCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão' and nucleo = 'Caruaru'")->row_array();
        $fimPrazoCivilCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil' and nucleo = 'Caruaru'")->row_array();
        $fimPrazoTempCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario' and nucleo = 'Caruaru'")->row_array();
        $fugaCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga' and nucleo = 'Caruaru'")->row_array();
        $HarmCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado' and nucleo = 'Caruaru'")->row_array();
        $condCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional' and nucleo = 'Caruaru'")->row_array();
        $obitoCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Caruaru'")->row_array();
        $obitoCVLICountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI' and nucleo = 'Caruaru'")->row_array();
        $PrisaoDomiCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar' and nucleo = 'Caruaru'")->row_array();
        $ProgressRegimeCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime' and nucleo = 'Caruaru'")->row_array();
        $transfCpCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP' and nucleo = 'Caruaru'")->row_array();
        $transfUfCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF' and nucleo = 'Caruaru'")->row_array();
        $transfUpCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP' and nucleo = 'Caruaru'")->row_array();
        $transitoCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito' and nucleo = 'Caruaru'")->row_array();
        $outrosCountCaruaru = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros' and nucleo = 'Caruaru'")->row_array();
        $this->response(
            (object)[
                'alvaraCountCaruaru' =>  $alvaraCountCaruaru, 
                'delegCountCaruaru' => $delegCountCaruaru,
                'domicCountCaruaru' => $domicCountCaruaru,
                'evasaoCountCaruaru' => $evasaoCountCaruaru,
                'fimPrazoCivilCountCaruaru' => $fimPrazoCivilCountCaruaru,
                'fimPrazoTempCountCaruaru' => $fimPrazoTempCountCaruaru,
                'fugaCountCaruaru' =>  $fugaCountCaruaru, 
                'HarmCountCaruaru' => $HarmCountCaruaru,
                'condCountCaruaru' => $condCountCaruaru,
                'obitoCountCaruaru' => $obitoCountCaruaru,
                'obitoCVLICountCaruaru' =>  $obitoCVLICountCaruaru, 
                'PrisaoDomiCountCaruaru' => $PrisaoDomiCountCaruaru,
                'ProgressRegimeCountCaruaru' => $ProgressRegimeCountCaruaru,
                'transfCpCountCaruaru' => $transfCpCountCaruaru ,
                'transfUfCountCaruaru' => $transfUfCountCaruaru,
                'transfUpCountCaruaru' =>  $transfUpCountCaruaru, 
                'transitoCountCaruaru' => $transitoCountCaruaru,
                'outrosCountCaruaru' => $outrosCountCaruaru
            ],
            REST_Controller::HTTP_OK
        );
    }

    public function getexitGaranhuns_get() {
        $alvaraCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Alvará de Soltura' and nucleo = 'Garanhuns'")->row_array();
        $delegCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia' and nucleo = 'Garanhuns'")->row_array();
        $domicCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID' and nucleo = 'Garanhuns'")->row_array();
        $evasaoCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão' and nucleo = 'Garanhuns'")->row_array();
        $fimPrazoCivilCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil' and nucleo = 'Garanhuns'")->row_array();
        $fimPrazoTempCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario' and nucleo = 'Garanhuns'")->row_array();
        $fugaCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga' and nucleo = 'Garanhuns'")->row_array();
        $HarmCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado' and nucleo = 'Garanhuns'")->row_array();
        $condCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional' and nucleo = 'Garanhuns'")->row_array();
        $obitoCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Garanhuns'")->row_array();
        $obitoCVLICountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI' and nucleo = 'Garanhuns'")->row_array();
        $PrisaoDomiCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar' and nucleo = 'Garanhuns'")->row_array();
        $ProgressRegimeCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime' and nucleo = 'Garanhuns'")->row_array();
        $transfCpCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP' and nucleo = 'Garanhuns'")->row_array();
        $transfUfCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF' and nucleo = 'Garanhuns'")->row_array();
        $transfUpCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP' and nucleo = 'Garanhuns'")->row_array();
        $transitoCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito' and nucleo = 'Garanhuns'")->row_array();
        $outrosCountGaranhuns = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros' and nucleo = 'Garanhuns'")->row_array();
        $this->response(
            (object)[
                'alvaraCountGaranhuns' =>  $alvaraCountGaranhuns, 
                'delegCountGaranhuns' => $delegCountGaranhuns,
                'domicCountGaranhuns' => $domicCountGaranhuns,
                'evasaoCountGaranhuns' => $evasaoCountGaranhuns,
                'fimPrazoCivilCountGaranhuns' => $fimPrazoCivilCountGaranhuns,
                'fimPrazoTempCountGaranhuns' => $fimPrazoTempCountGaranhuns,
                'fugaCountGaranhuns' =>  $fugaCountGaranhuns, 
                'HarmCountGaranhuns' => $HarmCountGaranhuns,
                'condCountGaranhuns' => $condCountGaranhuns,
                'obitoCountGaranhuns' => $obitoCountGaranhuns,
                'obitoCVLICountGaranhuns' =>  $obitoCVLICountGaranhuns, 
                'PrisaoDomiCountGaranhuns' => $PrisaoDomiCountGaranhuns,
                'ProgressRegimeCountGaranhuns' => $ProgressRegimeCountGaranhuns,
                'transfCpCountGaranhuns' => $transfCpCountGaranhuns ,
                'transfUfCountGaranhuns' => $transfUfCountGaranhuns,
                'transfUpCountGaranhuns' =>  $transfUpCountGaranhuns, 
                'transitoCountGaranhuns' => $transitoCountGaranhuns,
                'outrosCountGaranhuns' => $outrosCountGaranhuns
            ],
            REST_Controller::HTTP_OK
        );
    }
    public function getexitLagoa_get() {
        $alvaraCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Alvará de Soltura' and nucleo = 'Lagoa'")->row_array();
        $delegCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia' and nucleo = 'Lagoa'")->row_array();
        $domicCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID' and nucleo = 'Lagoa'")->row_array();
        $evasaoCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão' and nucleo = 'Lagoa'")->row_array();
        $fimPrazoCivilCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil' and nucleo = 'Lagoa'")->row_array();
        $fimPrazoTempCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario' and nucleo = 'Lagoa'")->row_array();
        $fugaCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga' and nucleo = 'Lagoa'")->row_array();
        $HarmCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado' and nucleo = 'Lagoa'")->row_array();
        $condCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional' and nucleo = 'Lagoa'")->row_array();
        $obitoCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Lagoa'")->row_array();
        $obitoCVLICountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI' and nucleo = 'Lagoa'")->row_array();
        $PrisaoDomiCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar' and nucleo = 'Lagoa'")->row_array();
        $ProgressRegimeCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime' and nucleo = 'Lagoa'")->row_array();
        $transfCpCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP' and nucleo = 'Lagoa'")->row_array();
        $transfUfCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF' and nucleo = 'Lagoa'")->row_array();
        $transfUpCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP' and nucleo = 'Lagoa'")->row_array();
        $transitoCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito' and nucleo = 'Lagoa'")->row_array();
        $outrosCountLagoa = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros' and nucleo = 'Lagoa'")->row_array();
        $this->response(
            (object)[
                'alvaraCountLagoa' =>  $alvaraCountLagoa, 
                'delegCountLagoa' => $delegCountLagoa,
                'domicCountLagoa' => $domicCountLagoa,
                'evasaoCountLagoa' => $evasaoCountLagoa,
                'fimPrazoCivilCountLagoa' => $fimPrazoCivilCountLagoa,
                'fimPrazoTempCountLagoa' => $fimPrazoTempCountLagoa,
                'fugaCountLagoa' =>  $fugaCountLagoa, 
                'HarmCountLagoa' => $HarmCountLagoa,
                'condCountLagoa' => $condCountLagoa,
                'obitoCountLagoa' => $obitoCountLagoa,
                'obitoCVLICountLagoa' =>  $obitoCVLICountLagoa, 
                'PrisaoDomiCountLagoa' => $PrisaoDomiCountLagoa,
                'ProgressRegimeCountLagoa' => $ProgressRegimeCountLagoa,
                'transfCpCountLagoa' => $transfCpCountLagoa ,
                'transfUfCountLagoa' => $transfUfCountLagoa,
                'transfUpCountLagoa' =>  $transfUpCountLagoa, 
                'transitoCountLagoa' => $transitoCountLagoa,
                'outrosCountLagoa' => $outrosCountLagoa
            ],
            REST_Controller::HTTP_OK
        );
    }

    public function getexitPetrolina_get() {
        $alvaraCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Alvará de Soltura' and nucleo = 'Petrolina'")->row_array();
        $delegCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia' and nucleo = 'Petrolina'")->row_array();
        $domicCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID' and nucleo = 'Petrolina'")->row_array();
        $evasaoCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão' and nucleo = 'Petrolina'")->row_array();
        $fimPrazoCivilCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil' and nucleo = 'Petrolina'")->row_array();
        $fimPrazoTempCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario' and nucleo = 'Petrolina'")->row_array();
        $fugaCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga' and nucleo = 'Petrolina'")->row_array();
        $HarmCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado' and nucleo = 'Petrolina'")->row_array();
        $condCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional' and nucleo = 'Petrolina'")->row_array();
        $obitoCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Petrolina'")->row_array();
        $obitoCVLICountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI' and nucleo = 'Petrolina'")->row_array();
        $PrisaoDomiCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar' and nucleo = 'Petrolina'")->row_array();
        $ProgressRegimeCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime' and nucleo = 'Petrolina'")->row_array();
        $transfCpCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP' and nucleo = 'Petrolina'")->row_array();
        $transfUfCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF' and nucleo = 'Petrolina'")->row_array();
        $transfUpCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP' and nucleo = 'Petrolina'")->row_array();
        $transitoCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito' and nucleo = 'Petrolina'")->row_array();
        $outrosCountPetrolina = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros' and nucleo = 'Petrolina'")->row_array();
        $this->response(
            (object)[
                'alvaraCountPetrolina' =>  $alvaraCountPetrolina, 
                'delegCountPetrolina' => $delegCountPetrolina,
                'domicCountPetrolina' => $domicCountPetrolina,
                'evasaoCountPetrolina' => $evasaoCountPetrolina,
                'fimPrazoCivilCountPetrolina' => $fimPrazoCivilCountPetrolina,
                'fimPrazoTempCountPetrolina' => $fimPrazoTempCountPetrolina,
                'fugaCountPetrolina' =>  $fugaCountPetrolina, 
                'HarmCountPetrolina' => $HarmCountPetrolina,
                'condCountPetrolina' => $condCountPetrolina,
                'obitoCountPetrolina' => $obitoCountPetrolina,
                'obitoCVLICountPetrolina' =>  $obitoCVLICountPetrolina, 
                'PrisaoDomiCountPetrolina' => $PrisaoDomiCountPetrolina,
                'ProgressRegimeCountPetrolina' => $ProgressRegimeCountPetrolina,
                'transfCpCountPetrolina' => $transfCpCountPetrolina ,
                'transfUfCountPetrolina' => $transfUfCountPetrolina,
                'transfUpCountPetrolina' =>  $transfUpCountPetrolina, 
                'transitoCountPetrolina' => $transitoCountPetrolina,
                'outrosCountPetrolina' => $outrosCountPetrolina
            ],
            REST_Controller::HTTP_OK
        );
    }

    public function getexitSalgueiro_get() {
        $alvaraCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Alvará de Soltura' and nucleo = 'Salgueiro'")->row_array();
        $delegCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Delegacia' and nucleo = 'Salgueiro'")->row_array();
        $domicCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Domiciliar COVID' and nucleo = 'Salgueiro'")->row_array();
        $evasaoCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Evasão' and nucleo = 'Salgueiro'")->row_array();
        $fimPrazoCivilCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Fim de Prazo da Prisão Civil' and nucleo = 'Salgueiro'")->row_array();
        $fimPrazoTempCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fim de Prazo da Prisão Temporario' and nucleo = 'Salgueiro'")->row_array();
        $fugaCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Fuga' and nucleo = 'Salgueiro'")->row_array();
        $HarmCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Harmonizado' and nucleo = 'Salgueiro'")->row_array();
        $condCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Liberdade Condicional' and nucleo = 'Salgueiro'")->row_array();
        $obitoCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Salgueiro'")->row_array();
        $obitoCVLICountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito CVLI' and nucleo = 'Salgueiro'")->row_array();
        $PrisaoDomiCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Prisão Domiciliar' and nucleo = 'Salgueiro'")->row_array();
        $ProgressRegimeCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE motivo = 'Progressão de Regime' and nucleo = 'Salgueiro'")->row_array();
        $transfCpCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/CP' and nucleo = 'Salgueiro'")->row_array();
        $transfUfCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE 	motivo = 'Transferência P/UF' and nucleo = 'Salgueiro'")->row_array();
        $transfUpCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transferência P/UP' and nucleo = 'Salgueiro'")->row_array();
        $transitoCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE    motivo = 'Transito' and nucleo = 'Salgueiro'")->row_array();
        $outrosCountSalgueiro = $this->db->query("SELECT COUNT(*) as MOT_COUNT FROM tbl_saidadetentos WHERE      motivo = 'Outros' and nucleo = 'Salgueiro'")->row_array();
        $this->response(
            (object)[
                'alvaraCountSalgueiro' =>  $alvaraCountSalgueiro, 
                'delegCountSalgueiro' => $delegCountSalgueiro,
                'domicCountSalgueiro' => $domicCountSalgueiro,
                'evasaoCountSalgueiro' => $evasaoCountSalgueiro,
                'fimPrazoCivilCountSalgueiro' => $fimPrazoCivilCountSalgueiro,
                'fimPrazoTempCountSalgueiro' => $fimPrazoTempCountSalgueiro,
                'fugaCountSalgueiro' =>  $fugaCountSalgueiro, 
                'HarmCountSalgueiro' => $HarmCountSalgueiro,
                'condCountSalgueiro' => $condCountSalgueiro,
                'obitoCountSalgueiro' => $obitoCountSalgueiro,
                'obitoCVLICountSalgueiro' =>  $obitoCVLICountSalgueiro, 
                'PrisaoDomiCountSalgueiro' => $PrisaoDomiCountSalgueiro,
                'ProgressRegimeCountSalgueiro' => $ProgressRegimeCountSalgueiro,
                'transfCpCountSalgueiro' => $transfCpCountSalgueiro ,
                'transfUfCountSalgueiro' => $transfUfCountSalgueiro,
                'transfUpCountSalgueiro' =>  $transfUpCountSalgueiro, 
                'transitoCountSalgueiro' => $transitoCountSalgueiro,
                'outrosCountSalgueiro' => $outrosCountSalgueiro
            ],
            REST_Controller::HTTP_OK
        );
    }

    public function getAutorizaSaidaArcoverde_get() {
        $audienciaCountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia WHERE nucleo = 'Arcoverde'")->row_array();
        $consultaMedCountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica' and nucleo = 'Arcoverde'")->row_array();
        $consultaOdontoCountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica' and nucleo = 'Arcoverde'")->row_array();
        $EmergenciaCountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência' and nucleo = 'Arcoverde'")->row_array();
        $EscoltaFunCountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Arcoverde'")->row_array();
        $ExamesComplexCountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos' and nucleo = 'Arcoverde'")->row_array();
        $ExamesLaboratorCountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais' and nucleo = 'Arcoverde'")->row_array();
        $outros3CountArcoverde = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros' and nucleo = 'Arcoverde'")->row_array();
        $this->response(
            (object) [
                'audienciaCountArcoverde' => $audienciaCountArcoverde, 
                'consultaMedCountArcoverde' => $consultaMedCountArcoverde,
                'consultaOdontoCountArcoverde' => $consultaOdontoCountArcoverde,
                'EmergenciaCountArcoverde' => $EmergenciaCountArcoverde,
                'EscoltaFunCountArcoverde' => $EscoltaFunCountArcoverde,
                'ExamesComplexCountArcoverde' => $ExamesComplexCountArcoverde, 
                'ExamesLaboratorCountArcoverde' => $ExamesLaboratorCountArcoverde,
                'outros3CountArcoverde' => $outros3CountArcoverde
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getAutorizaSaidaCaruaru_get() {
        $audienciaCountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia WHERE nucleo = 'Caruaru'")->row_array();
        $consultaMedCountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica' and nucleo = 'Caruaru'")->row_array();
        $consultaOdontoCountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica' and nucleo = 'Caruaru'")->row_array();
        $EmergenciaCountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência' and nucleo = 'Caruaru'")->row_array();
        $EscoltaFunCountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Caruaru'")->row_array();
        $ExamesComplexCountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos' and nucleo = 'Caruaru'")->row_array();
        $ExamesLaboratorCountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais' and nucleo = 'Caruaru'")->row_array();
        $outros3CountCaruaru = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros' and nucleo = 'Caruaru'")->row_array();
        $this->response(
            (object) [
                'audienciaCountCaruaru' => $audienciaCountCaruaru, 
                'consultaMedCounCaruaru' => $consultaMedCountCaruaru,
                'consultaOdontoCountCaruaru' => $consultaOdontoCountCaruaru,
                'EmergenciaCountCaruaru' => $EmergenciaCountCaruaru,
                'EscoltaFunCountCaruaru' => $EscoltaFunCountCaruaru,
                'ExamesComplexCountCaruaru' => $ExamesComplexCountCaruaru, 
                'ExamesLaboratorCountCaruaru' => $ExamesLaboratorCountCaruaru,
                'outros3CountCaruaru' => $outros3CountCaruaru
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getAutorizaSaidaGaranhuns_get() {
        $audienciaCountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia WHERE nucleo = 'Garanhuns'")->row_array();
        $consultaMedCountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica' and nucleo = 'Garanhuns'")->row_array();
        $consultaOdontoCountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica' and nucleo = 'Garanhuns'")->row_array();
        $EmergenciaCountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência' and nucleo = 'Garanhuns'")->row_array();
        $EscoltaFunCountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Garanhuns'")->row_array();
        $ExamesComplexCountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos' and nucleo = 'Garanhuns'")->row_array();
        $ExamesLaboratorCountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais' and nucleo = 'Garanhuns'")->row_array();
        $outros3CountGaranhuns = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros' and nucleo = 'Garanhuns'")->row_array();
        $this->response(
            (object) [
                'audienciaCountGaranhuns' => $audienciaCountGaranhuns, 
                'consultaMedCountGaranhuns' => $consultaMedCountGaranhuns,
                'consultaOdontoCountGaranhuns' => $consultaOdontoCountGaranhuns,
                'EmergenciaCountGaranhuns' => $EmergenciaCountGaranhuns,
                'EscoltaFunCountGaranhuns' => $EscoltaFunCountGaranhuns,
                'ExamesComplexCountGaranhuns' => $ExamesComplexCountGaranhuns, 
                'ExamesLaboratorCountGaranhuns' => $ExamesLaboratorCountGaranhuns,
                'outros3CountGaranhuns' => $outros3CountGaranhuns
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getAutorizaSaidaLagoa_get() {
        $audienciaCountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia WHERE nucleo = 'Lagoa'")->row_array();
        $consultaMedCountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica' and nucleo = 'Lagoa'")->row_array();
        $consultaOdontoCountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica' and nucleo = 'Lagoa'")->row_array();
        $EmergenciaCountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência' and nucleo = 'Lagoa'")->row_array();
        $EscoltaFunCountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Lagoa'")->row_array();
        $ExamesComplexCountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos' and nucleo = 'Lagoa'")->row_array();
        $ExamesLaboratorCountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais' and nucleo = 'Lagoa'")->row_array();
        $outros3CountLagoa = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros' and nucleo = 'Lagoa'")->row_array();
        $this->response(
            (object) [
                'audienciaCountLagoa' => $audienciaCountLagoa, 
                'consultaMedCountLagoa' => $consultaMedCountLagoa,
                'consultaOdontoCountLagoa' => $consultaOdontoCountLagoa,
                'EmergenciaCountLagoa' => $EmergenciaCountLagoa,
                'EscoltaFunCountLagoa' => $EscoltaFunCountLagoa,
                'ExamesComplexCountLagoa' => $ExamesComplexCountLagoa, 
                'ExamesLaboratorCountLagoa' => $ExamesLaboratorCountLagoa,
                'outros3CounLagoa' => $outros3CountLagoa
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getAutorizaSaidaPetrolina_get() {
        $audienciaCountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia WHERE nucleo = 'Petrolina'")->row_array();
        $consultaMedCountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica' and nucleo = 'Petrolina'")->row_array();
        $consultaOdontoCountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica' and nucleo = 'Petrolina'")->row_array();
        $EmergenciaCountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência' and nucleo = 'Petrolina'")->row_array();
        $EscoltaFunCountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Petrolina'")->row_array();
        $ExamesComplexCountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos' and nucleo = 'Petrolina'")->row_array();
        $ExamesLaboratorCountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais' and nucleo = 'Petrolina'")->row_array();
        $outros3CountPetrolina = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros' and nucleo = 'Petrolina'")->row_array();
        $this->response(
            (object) [
                'audienciaCountPetrolina' => $audienciaCountPetrolina, 
                'consultaMedCountPetrolina' => $consultaMedCountPetrolina,
                'consultaOdontoCountPetrolina' => $consultaOdontoCountPetrolina,
                'EmergenciaCountPetrolina' => $EmergenciaCountPetrolina,
                'EscoltaFunCountPetrolina' => $EscoltaFunCountPetrolina,
                'ExamesComplexCountPetrolina' => $ExamesComplexCountPetrolina, 
                'ExamesLaboratorCountPetrolina' => $ExamesLaboratorCountPetrolina,
                'outros3CountPetrolina' => $outros3CountPetrolina
            ]
        , REST_Controller::HTTP_OK);
    }

    public function getAutorizaSaidaSalgueiro_get() {
        $audienciaCountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidaaudiencia WHERE nucleo = 'Salgueiro'")->row_array();
        $consultaMedCountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Médica' and nucleo = 'Salgueiro'")->row_array();
        $consultaOdontoCountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Consulta Odontológica' and nucleo = 'Salgueiro'")->row_array();
        $EmergenciaCountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Emergência' and nucleo = 'Salgueiro'")->row_array();
        $EscoltaFunCountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidadetentos WHERE motivo = 'Óbito' and nucleo = 'Salgueiro'")->row_array();
        $ExamesComplexCountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Complexos' and nucleo = 'Salgueiro'")->row_array();
        $ExamesLaboratorCountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Exames Laboratoriais' and nucleo = 'Salgueiro'")->row_array();
        $outros3CountSalgueiro = $this->db->query("SELECT COUNT(*) as AUT_AUD_COUNT FROM tbl_saidasaude WHERE motivo = 'Outros' and nucleo = 'Salgueiro'")->row_array();
        $this->response(
            (object) [
                'audienciaCountSalgueiro' => $audienciaCountSalgueiro, 
                'consultaMedCountSalgueiro' => $consultaMedCountSalgueiro,
                'consultaOdontoCountSalgueiro' => $consultaOdontoCountSalgueiro,
                'EmergenciaCountSalgueiro' => $EmergenciaCountSalgueiro,
                'EscoltaFunCountSalgueiro' => $EscoltaFunCountSalgueiro,
                'ExamesComplexCountSalgueiro' => $ExamesComplexCountSalgueiro, 
                'ExamesLaboratorCountSalgueiro' => $ExamesLaboratorCountSalgueiro,
                'outros3CountSalgueiro' => $outros3CountSalgueiro
            ]
        , REST_Controller::HTTP_OK);
    }
    
    
}
?>