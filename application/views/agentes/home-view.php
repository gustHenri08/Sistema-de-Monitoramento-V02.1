<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> SMP | Home </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo site_url('Home'); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SMP</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SMP</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <div>
            <ul class="navbar nav">
              <!-- Corresponde as informações do Botão/Link "Sair" -->
              <li class="nav-item">
                <a href="<?php echo site_url('Login/logout'); ?>" class="nav-link" style="height: 50px;">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="" class="" alt="">
            <!--Foto do Usuario, não pode tirar esse bloco se n quebra a view-->
          </div>
          <div class="pull-left info">
            <p><?php echo ($this->session->userdata("nomecompleto")); ?></p>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Pesquise...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Principal</li>
          <li>
            <a href="<?php echo site_url('Home'); ?>">
              <!-- Link do Home, ao ser clicado ele retorna o controller-->
              <i class="fa fa-home"></i> <span>Home</span>
            </a>
          </li>
          <li>
            <a href="<?php echo site_url('Home/entradaPresos'); ?> ">
              <i class="fa fa-user-plus"></i>
              <span>Entrada de Detentos</span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo site_url(''); ?> ">
              <i class="fa fa-registered"></i>
              <span>Ocorrências</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('Home/registroOcorrencias'); ?>"><i class="fa fa-registered"></i> Registro de Ocorrências </a></li>
              <li><a href="<?php echo site_url('Home/outrasOcorrencias'); ?>"><i class="fa fa-registered"></i> Outras Ocorrências </a></li>
              <li><a href="<?php echo site_url('Home/revistasApreensoes'); ?>"><i class="fa fa-ban"></i> Revistas e Apreensões </a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo site_url('Home/abertoSemiaberto'); ?> ">
              <i class="fa fa-file-text-o"></i>
              <span>Relação Aberto / Semi-Aberto</span>
            </a>
          </li>
          <li class="treeview">
            <a href="<?php echo site_url(''); ?>">
              <i class="fa fa-user-times"></i>
              <span>Saída de Detentos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('Home/saidaCadeiaPublica'); ?>"><i class="fa fa-key"></i> Saída da Cadeia Pública</a></li>
              <li><a href="<?php echo site_url('Home/saidaAudiencia'); ?>"><i class="fa fa-cab"></i> Saída para Audiência</a></li>
              <li><a href="<?php echo site_url('Home/saidaMedica'); ?>"><i class="fa fa-ambulance"></i> Saída Médica</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="<?php echo site_url('Home'); ?>">
              <i class="fa fa-edit"></i> <span>Trânsito</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('Home/transitoInterno'); ?>"><i class="fa fa-refresh"></i> Trânsito Interno</a></li>
              <li><a href="<?php echo site_url('Home/transitoExterno'); ?>"><i class="fa fa-exchange"></i> Trânsito Externo</a></li>
            </ul>
          </li>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Estatísticas da CP</h3>
            <br>
            <br>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
            <div class="form-group col-xs-4">
              <label>Busca por Data:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="reservation">
              </div>
              <!-- /.input group -->
            </div>
          </div>
          <div class="box-body">
            <canvas class="line-chart"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script>
              setTimeout(() => {
                //            Homens, Mulheres, Regime Aberto, Semi Aberto, Fechado
                var VALUES = [0, 0, 0, 0, 0];
                var ctx = document.getElementsByClassName("line-chart");
                var chartGraph = new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ["Homens", "Mulheres", "Regime Aberto", "Regime Semi-Aberto", "Regime Fechado", ],
                    datasets: [{
                      label: "Nome da CP",
                      //*Número de presos por Núcleo*//
                      data: VALUES,
                      backgroundColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)"],
                      borderColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)"],
                      borderWidth: 2
                    }, ],
                  },
                  options: {
                    scales: {
                      yAxes: [{
                        scaleLabel: {
                          display: true,
                          labelString: 'Número de Presos'
                          
                        },
                        ticks: {
                          suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                          // OR //
                          beginAtZero: true   // minimum value will be 0.
                         }
                      }],
                      xAxes: [{
                        scaleLabel: {
                          fontColor: 'black',
                          display: true,
                          labelString: 'Categorias'
                        }
                      }]
                    }
                  }
                });
                async function chart_getinfo() {
                    const blob = await fetch("<?php echo site_url('Chart/getinfo'); ?>");
                    const data = await blob.json();

                    VALUES[0] = data.maleCount.SEX_COUNT;
                    VALUES[1] = data.femaleCount.SEX_COUNT;
                    VALUES[2] = data.regimeAberto.SEX_COUNT;
                    VALUES[3] = data.regimeSemi.SEX_COUNT;
                    VALUES[4] = data.regimeFechado.SEX_COUNT;
                  
                    chartGraph.update();
                }
               chart_getinfo();
              });
            </script>

            <div class="col-md-7">
              <br><br><br><br><br><br><br><br>
              <h3>Motivo de Saída de Presos</h3>
              <br>
              <br>
              <canvas class="doughnut-chart2"></canvas>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
              <script>
                var getexit_VALUES = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
                var ctx = document.getElementsByClassName("doughnut-chart2");
                var getexit_chartGraph = new Chart(ctx, {
                  type: 'doughnut',
                  data: {
                    labels: ["Alvará de Soltura", "Delegacia", "Domiciliar COVID", "Evasão", "Fim de Prazo da Prisão Civil", "Fim de prazo da Prisão Temporária", "Fuga", "Harmonizado", "Liberdade Condicional", "Óbito", "Óbito CVLI", "Prisão Domicilar", "Progressão de Regime", "Transferência P/CP", "Transferência P/UF", "Transferência P/UP", "Trânsito", "Outros"],
                    datasets: [{
                      label: "Nome da CP",
                      //*Número de presos por Núcleo*//
                      data : getexit_VALUES,
                      backgroundColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)", "rgba(255,20,14,10)", "rgba(255,255,0,10)", "rgba(139,0,139,10)", "rgba(0, 0, 0, 10)", "rgba(0, 0, 255, 10)", "rgba(0, 191, 255, 10)", "rgba(0, 0, 128, 10)", "rgba(0, 255, 127, 10)", "rgba(210,105,30,10)", "rgba(75,0,130,10)", "rgba(255,228,181,10)", "rgba(238,232,170,10)"],
                      borderColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)", "rgba(255,20,14,10)", "rgba(255,255,0,10)", "rgba(139,0,139,10)", "rgba(0, 0, 0, 10)", "rgba(0, 0, 255, 10)", "rgba(0, 191, 255, 10)", "rgba(0, 0, 128, 10)", "rgba(0, 255, 127, 10)", "rgba(210,105,30,10)", "rgba(75,0,130,10)", "rgba(255,228,181,10)", "rgba(238,232,170,10)"],
                      borderWidth: 2
                    }, ],
                  },
                  options:{
                    legend:{
                    }
                  }
                });
                async function chart_getexit() {
                    const blob = await fetch("<?php echo site_url('Chart/getexit'); ?>");
                    const data = await blob.json();

                    getexit_VALUES[0] = data.alvaraCount.MOT_COUNT;
                    getexit_VALUES[1] = data.delegCount.MOT_COUNT;
                    getexit_VALUES[2] = data.domicCount.MOT_COUNT;
                    getexit_VALUES[3] = data.evasaoCount.MOT_COUNT;
                    getexit_VALUES[4] = data.fimPrazoCivilCount.MOT_COUNT;
                    getexit_VALUES[5] = data.fimPrazoTempCount.MOT_COUNT;
                    getexit_VALUES[6] = data.fugaCount.MOT_COUNT;
                    getexit_VALUES[7] = data.HarmCount.MOT_COUNT;
                    getexit_VALUES[8] = data.condCount.MOT_COUNT;
                    getexit_VALUES[9] = data.obitoCount.MOT_COUNT;
                    getexit_VALUES[10] = data.obitoCVLICount.MOT_COUNT;
                    getexit_VALUES[11] = data.PrisaoDomiCount.MOT_COUNT;
                    getexit_VALUES[12] = data.ProgressRegimeCount.MOT_COUNT;
                    getexit_VALUES[13] = data.transfCpCount.MOT_COUNT;
                    getexit_VALUES[14] = data.transfUfCount.MOT_COUNT;
                    getexit_VALUES[15] = data.transfUpCount.MOT_COUNT;
                    getexit_VALUES[16] = data.transitoCount.MOT_COUNT;
                    getexit_VALUES[17] = data.outrosCount.MOT_COUNT;
                    getexit_chartGraph.update();
                }
                chart_getexit();
              </script>
              <br>
            </div>
            <div class="col-md-5">
              <h3>Motivo de Entrada de Presos</h3>
              <br>
              <br>
              <canvas id="chart-legend-bottom" class="doughnut-chart"></canvas>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
              <script>
                var ctx = document.getElementsByClassName("doughnut-chart");
                var getEntrada_VALUES = [0,0,0,0,0,0,0,0,0];
                var getEntrada_chartGraph = new Chart(ctx, {
                  type: 'doughnut',
                  data: {
                    labels: ["Expiração de Prazo", "Mandado de Prisão Civil", "Mandado de Prisão Preventiva", "Mandado de Prisão Temporária", "Mandado de Recolhimento", "Recaptura - Mandado de Prisão", "Tansferência", "Trânsito", "Outros"],
                    datasets: [{
                      label: "Entrada de Presos",
                      //*Número de presos por Núcleo*//
                      data: getEntrada_VALUES,
                      backgroundColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)", "rgba(255,20,14,10)", "rgba(255,255,0,10)", "rgba(139,0,139,10)"],
                      borderColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)", "rgba(255,20,14,10)", "rgba(255,255,0,10)", "rgba(139,0,139,10)"],
                      borderWidth: 2
                    }, ],
                  }
                });
                async function chart_getEntrada() {
                    const blob = await fetch("<?php echo site_url('Chart/getEntrada'); ?>");
                    const data = await blob.json();

                    getEntrada_VALUES[0] = data.expiraPrazoCount.MOT_ENT_COUNT;
                    getEntrada_VALUES[1] = data.mandadoPrisCivilCount.MOT_ENT_COUNT;
                    getEntrada_VALUES[2] = data.mandadoPrisPrevCount.MOT_ENT_COUNT;
                    getEntrada_VALUES[3] = data.mandadoPrisTempCount.MOT_ENT_COUNT;
                    getEntrada_VALUES[4] = data.mandadoRecolhimentoCount.MOT_ENT_COUNT;
                    getEntrada_VALUES[6] = data.recapturaCount.MOT_ENT_COUNT;
                    getEntrada_VALUES[5] = data.transferenciaCount.MOT_ENT_COUNT;
                    getEntrada_VALUES[7] = data.transito2Count.MOT_ENT_COUNT;
                    getEntrada_VALUES[8] = data.outros2Count.MOT_ENT_COUNT;
                    

                    getEntrada_chartGraph.data.datasets[0].data=getEntrada_VALUES.map(x => parseInt(x));
                    getEntrada_chartGraph.update();
                }
                chart_getEntrada();
              </script>
            </div>

            <div class="col-md-5">
              <h3>Motivo de Autorização de Saída de Presos</h3>
              <br>
              <br>
              <canvas id="chart-legend-bottom" class="doughnut-chart3"></canvas>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
              <script>
                var ctx = document.getElementsByClassName("doughnut-chart3");
                var getAutSaida_VALUES = [0,0,0,0,0,0,0,0];
                var getAutSaida_chartGraph = new Chart(ctx, {
                  type: 'doughnut',
                  data: {
                    labels: ["Audiência Presencial", "Consulta Médica", "Consulta Odontológica", "Emergência", "Escolta Funeral", "Exames Complexos", "Exames Laboratoriais", "Outros"],
                    datasets: [{
                      label: "Entrada de Presos",
                      //*Número de presos por Núcleo*//
                      data: getAutSaida_VALUES,
                      backgroundColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)", "rgba(255,20,14,10)", "rgba(255,255,0,10)", "rgba(139,0,139,10)"],
                      borderColor: ["rgba(255, 99, 132, 10)", "rgba(255, 159, 64, 10)", "rgba(255, 205, 86, 10)", "rgba(75, 192, 192, 10)", "rgba(54, 162, 235, 10)", "rgba(153, 102, 255, 10)", "rgba(255,20,14,10)", "rgba(255,255,0,10)", "rgba(139,0,139,10)"],
                      borderWidth: 2
                    }, ],
                  }
                });
                async function chart_getAutSaida() {
                    const blob = await fetch("<?php echo site_url('Chart/getAutorizaSaida'); ?>");
                    const data = await blob.json();

                    getAutSaida_VALUES[0] = data.audienciaCount.AUT_AUD_COUNT;
                    getAutSaida_VALUES[1] = data.consultaMedCount.AUT_AUD_COUNT;
                    getAutSaida_VALUES[2] = data.consultaOdontoCount.AUT_AUD_COUNT;
                    getAutSaida_VALUES[3] = data.EmergenciaCount.AUT_AUD_COUNT;
                    getAutSaida_VALUES[4] = data.EscoltaFunCount.AUT_AUD_COUNT;
                    getAutSaida_VALUES[6] = data.ExamesComplexCount.AUT_AUD_COUNT;
                    getAutSaida_VALUES[5] = data.ExamesLaboratorCount.AUT_AUD_COUNT;
                    getAutSaida_VALUES[7] = data.outros3Count.AUT_AUD_COUNT;
                    

                    getAutSaida_chartGraph.data.datasets[0].data=getAutSaida_VALUES.map(x => parseInt(x));
                    getAutSaida_chartGraph.update();
                }
                chart_getAutSaida();
              </script>
            </div>
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.18
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
  <!--Font Awesome My Link-->
  <script src="https://kit.fontawesome.com/3db1420b56.js" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('.sidebar-menu').tree()
    })

    $(function() {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/aaaa", {
        "placeholder": "dd/mm/aaaa"
      });
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/aaaa", {
        "placeholder": "mm/dd/aaaa"
      });
      //Money Euro
      $("[data-mask]").inputmask();

      //Date range picker
      $('#reservation').daterangepicker();
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        format: 'MM/DD/YYYY h:mm A'
      });
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
      );

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      });

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      });
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      });
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      });

      //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();

      //Timepicker
      $(".timepicker").timepicker({
        showInputs: false
      });
    });
  </script>
</body>

</html>