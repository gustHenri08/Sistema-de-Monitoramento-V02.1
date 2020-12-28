<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GerarPlanilhas extends CI_Controller{

    public function index()
    {
        $this->load-> library('PHPExcel');
        $arquivo = './planilhas/relatorio.xlsx';
        $planilha = $this->phpexcel;

        $registros[] = array();

        $planilha->setActiveSheetIndex(0)->setCellValue('A1','Nome Completo');
        $planilha->setActiveSheetIndex(0)->setCellValue('B1','Matricula');
        $planilha->setActiveSheetIndex(0)->setCellValue('C1','Núcleo');
        $planilha->setActiveSheetIndex(0)->setCellValue('D1','Unidade Prisional');
        $planilha->setActiveSheetIndex(0)->setCellValue('E1','E-mail Institucional');
        $planilha->setActiveSheetIndex(0)->setCellValue('F1','Login');
        $planilha->setActiveSheetIndex(0)->setCellValue('G1','Senha');
        $planilha->setActiveSheetIndex(0)->setCellValue('H1','Função');
        $planilha->setActiveSheetIndex(0)->setCellValue('I1','Funcionario Ativo');

        $contador = 1;
        foreach($registros as $linha){
            $contador ++;
        }


        $planilha->setActiveSheetIndex(0)->setTitle('Planilha 1');

        $objgravar = PHPExcel_IOFactory::createWriter($planilha, 'Excel2007');
        $objgravar->save($arquivo);

    }
    

}