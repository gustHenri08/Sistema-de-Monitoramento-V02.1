<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMP | Home </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Ionicons/css/ionicons.min.css">
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
    <a href="<?php echo site_url('Home/adminHome'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
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
            <ul class="navbar nav"> <!-- Corresponde as informações do Botão/Link "Sair" -->
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
          <img src="" class="" alt=""> <!--Foto do Usuario, não pode tirar esse bloco se n quebra a view-->
        </div>
        <div class="pull-left info">
        <p><?php echo ($this->session->userdata("nomecompleto"));?></p>
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
          <a href="<?php echo site_url('Home/adminHome'); ?>"> <!-- Link do Home, ao ser clicado ele retorna o controller-->
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Home/agentes'); ?>"> <!-- Link do Home, ao ser clicado ele retorna o controller-->
          <i class="fa fa-user-plus"></i>
            <span>Agentes</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('Home/entradaPresosAdmin'); ?> ">
            <i class="fa fa-user-plus"></i>
            <span>Entrada de Detentos</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url(''); ?>">
            <i class="fa fa-registered"></i>
            <span>Ocorrências</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Home/registroOcorrenciasAdmin'); ?>"><i class="fa fa-registered"></i> Registro de Ocorrências </a></li>
            <li><a href="<?php echo site_url('Home/outrasOcorrenciasAdmin'); ?>"><i class="fa fa-registered"></i> Outras Ocorrências </a></li>
            <li><a href="<?php echo site_url('Home/revistasApreensoesAdmin'); ?>"><i class="fa fa-ban"></i> Revistas e Apreensões </a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('Home/abertoSemiabertoAdmin'); ?> ">
            <i class="fa fa-file-text-o"></i>
            <span>Relação Aberto / Semi-Aberto</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url(''); ?>">
            <i class="fa fa-user-times"></i>
            <span>Saida do Detento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Home/saidaCadeiaPublicaAdmin'); ?>"><i class="fa fa-key"></i> Saída da Cadeia Pública</a></li>
            <li><a href="<?php echo site_url('Home/saidaAudienciaAdmin'); ?>"><i class="fa fa-cab"></i> Saída para Audiência</a></li>
            <li><a href="<?php echo site_url('Home/saidaMedicaAdmin'); ?>"><i class="fa fa-ambulance"></i> Saída Médica</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url(''); ?>">
            <i class="fa fa-edit"></i> <span>Trânsito</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Home/transitoInternoAdmin'); ?>"><i class="fa fa-refresh"></i> Trânsito Interno</a></li>
            <li><a href="<?php echo site_url('Home/transitoExternoAdmin'); ?>"><i class="fa fa-exchange"></i> Trânsito Externo</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Cabeçalho da Página -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('Home/adminHome');?>">Home</a></li>
      </ol>
    </section>
    <!-- /.content -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Estatísticas</h3>
          <br>
          <br>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
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
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h3>Número de Presos por Categorias</h3>
              <canvas class="bar-chart"></canvas>
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <h3>Motivo de Entrada de Presos</h3>
              <canvas class="bar-chart2"></canvas>
            </div>
            <div class="col-md-1"></div>
          </div>

          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <h3>Motivo de Saída de Presos</h3>
              <div class="col-sm-8">
                <div id="example1_filter" class="dataTables_filter">
                  <label>Procurar Núcleo:  
                    <select class="form-control" style="width: 200px" name="nucleo">
                      <option>Arcoverde</option>
                      <option>Caruaru</option>
                      <option>Garanhuns</option>
                      <option>Lagoa</option>
                      <option>Petrolina</option>
                      <option>Salgueiro</option>
                    </select>
                  </label>
                </div>
              </div>
              <canvas class="doughnut-chart2"></canvas>
            </div>
            <div class="col-md-5">
              <h3>Motivo de Autorização de Saída de Presos</h3>
              <canvas id="chart-legend-bottom" class="doughnut-chart3"></canvas>
            </div>  
            <div class="col-md-1"></div>      
          </div>


          
        </div>
        <!-- /.box-body -->
        
      
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

</div> <!--Fim da DIV Wrapper-->


<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
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
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script>
              var getinfoArcoverde_Values = [0, 0, 0, 0, 0];
              var getinfoCaruaru_Values = [0, 0, 0, 0, 0];
              var getinfoGaranhuns_Values = [0, 0, 0, 0, 0];
              var getinfoLagoa_Values = [0, 0, 0, 0, 0];
              var getinfoPetrolina_Values = [0, 0, 0, 0, 0];
              var getinfoSalgueiro_Values = [0, 0, 0, 0, 0];


              var ctx = document.getElementsByClassName("bar-chart");
              var chart_Admin = new Chart(ctx, {
                  type: 'bar',
                  data:{
                    labels: ["Homens","Mulheres","Regime Aberto","Regime Semi-Aberto","Regime Fechado"],
                    datasets:[
                      { label:"Núcleo Arco-Verde",
                        //*Número de presos por Núcleo*//
                        data: getinfoArcoverde_Values,
                        backgroundColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                        borderColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Caruaru",
                        //*Número de presos por Núcleo*//
                        data: getinfoCaruaru_Values,
                        backgroundColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Garanhuns",
                        //*Número de presos por Núcleo*//
                        data: getinfoGaranhuns_Values,
                        backgroundColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)"],
                        borderColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Lagoa",
                        //*Número de presos  no Núcleo*//
                        data: getinfoLagoa_Values,
                        backgroundColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Petrolina",
                        //*Número de presos por Núcleo*//
                        data: getinfoPetrolina_Values,
                        backgroundColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Salgueiro",
                        //*Número de presos por Núcleo*//
                        data: getinfoSalgueiro_Values,
                        backgroundColor:["rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)"],
                        borderColor:["rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)"],
                        borderWidth:2
                        },
                      ],
                    },
                    options:{
                      scales: {
                        yAxes: [{
                          scaleLabel: {
                            display: true,
                            labelString: 'Número de Presos'
                          }
                        }],
                        xAxes:[{
                          scaleLabel:{
                            fontColor: 'black',
                            display: true,
                            labelString: 'Categorias'
                          },
                          ticks: {
                          suggestedMin: 0,
                          // minimum will be 0, unless there is a lower value.
                          // OR //
                          beginAtZero: true   // minimum value will be 0.
                         }
                        }]
                      }
                    }
                  });
                  async function chart_getinfoArcoverde() {
                    const blob = await fetch("<?php echo site_url('Chart/getinfoArcoverde'); ?>");
                    const data = await blob.json();

                    getinfoArcoverde_Values[0] = data.maleCountArcoverde.SEX_COUNT;
                    getinfoArcoverde_Values[1] = data.femaleCountArcoverde.SEX_COUNT;
                    getinfoArcoverde_Values[2] = data.regimeAbertoCountArcoverde.SEX_COUNT;
                    getinfoArcoverde_Values[3] = data.regimeSemiCountArcoverde.SEX_COUNT;
                    getinfoArcoverde_Values[4] = data.regimeFechadoCountArcoverde.SEX_COUNT;
                  
                    chart_Admin.update();
                  }
                  chart_getinfoArcoverde();

                  async function chart_getinfoCaruaru() {
                    const blob = await fetch("<?php echo site_url('Chart/getinfoCaruaru'); ?>");
                    const data = await blob.json();

                    getinfoCaruaru_Values[0] = data.maleCountCaruaru.SEX_COUNT;
                    getinfoCaruaru_Values[1] = data.femaleCountCaruaru.SEX_COUNT;
                    getinfoCaruaru_Values[2] = data.regimeAbertoCountCaruaru.SEX_COUNT;
                    getinfoCaruaru_Values[3] = data.regimeSemiCountCaruaru.SEX_COUNT;
                    getinfoCaruaru_Values[4] = data.regimeFechadoCountCaruaru.SEX_COUNT;
                  
                    chart_Admin.update();
                  }
                  chart_getinfoCaruaru();

                  async function chart_getinfoGaranhuns() {
                    const blob = await fetch("<?php echo site_url('Chart/getinfoGaranhuns'); ?>");
                    const data = await blob.json();

                    getinfoGaranhuns_Values[0] = data.maleCountGaranhuns.SEX_COUNT;
                    getinfoGaranhuns_Values[1] = data.femaleCountGaranhuns.SEX_COUNT;
                    getinfoGaranhuns_Values[2] = data.regimeAbertoCountGaranhuns.SEX_COUNT;
                    getinfoGaranhuns_Values[3] = data.regimeSemiCountGaranhuns.SEX_COUNT;
                    getinfoGaranhuns_Values[4] = data.regimeFechadoCountGaranhuns.SEX_COUNT;
                  
                    chart_Admin.update();
                  }
                  chart_getinfoGaranhuns();

                  async function chart_getinfoLagoa() {
                    const blob = await fetch("<?php echo site_url('Chart/getinfoLagoa'); ?>");
                    const data = await blob.json();

                    getinfoLagoa_Values[0] = data.maleCountLagoa.SEX_COUNT;
                    getinfoLagoa_Values[1] = data.femaleCountLagoa.SEX_COUNT;
                    getinfoLagoa_Values[2] = data.regimeAbertoCountLagoa.SEX_COUNT;
                    getinfoLagoa_Values[3] = data.regimeSemiCountLagoa.SEX_COUNT;
                    getinfoLagoa_Values[4] = data.regimeFechadoCountLagoa.SEX_COUNT;
                  
                    chart_Admin.update();
                  }
                  chart_getinfoLagoa();

                  async function chart_getinfoPetrolina() {
                    const blob = await fetch("<?php echo site_url('Chart/getinfoPetrolina'); ?>");
                    const data = await blob.json();

                    getinfoPetrolina_Values[0] = data.maleCountPetrolina.SEX_COUNT;
                    getinfoPetrolina_Values[1] = data.femaleCountPetrolina.SEX_COUNT;
                    getinfoPetrolina_Values[2] = data.regimeAbertoCountPetrolina.SEX_COUNT;
                    getinfoPetrolina_Values[3] = data.regimeSemiCountPetrolina.SEX_COUNT;
                    getinfoPetrolina_Values[4] = data.regimeFechadoCountPetrolina.SEX_COUNT;
                  
                    chart_Admin.update();
                  }
                  chart_getinfoPetrolina();

                  async function chart_getinfoSalgueiro() {
                    const blob = await fetch("<?php echo site_url('Chart/getinfoSalgueiro'); ?>");
                    const data = await blob.json();

                    getinfoSalgueiro_Values[0] = data.maleCountSalgueiro.SEX_COUNT;
                    getinfoSalgueiro_Values[1] = data.femaleCountSalgueiro.SEX_COUNT;
                    getinfoSalgueiro_Values[2] = data.regimeAbertoCountSalgueiro.SEX_COUNT;
                    getinfoSalgueiro_Values[3] = data.regimeSemiCountSalgueiro.SEX_COUNT;
                    getinfoSalgueiro_Values[4] = data.regimeFechadoCountSalgueiro.SEX_COUNT;
                  
                    chart_Admin.update();
                  }
                  chart_getinfoSalgueiro();


                  


                  
            </script>

<script>
              var ctx = document.getElementsByClassName("bar-chart2");
              var getEntradaArcoverde_VALUES = [0,0,0,0,0,0,0,0,0];
              var getEntradaCaruaru_VALUES = [0,0,0,0,0,0,0,0,0];
              var getEntradaGaranhuns_VALUES = [0,0,0,0,0,0,0,0,0];             
              var getEntradaLagoa_VALUES = [0,0,0,0,0,0,0,0,0];
              var getEntradaPetrolina_VALUES = [0,0,0,0,0,0,0,0,0];
              var getEntradaSalgueiro_VALUES = [0,0,0,0,0,0,0,0,0];


              var chart_getEntrada = new Chart(ctx, {
                  type: 'bar',
                  data:{
                    labels: ["Expiração de Prazo","Mandado de Prisão Civil","Mandado de Prisão Preventiva","Mandado de Prisão Temporária","Mandado de Recolhimento","Recaptura - Mandado de Prisão","Tansferência","Trânsito","Outros"],
                    datasets:[
                      { label:"Núcleo Arco-Verde",
                        //*Número de presos por Núcleo*//
                        data: getEntradaArcoverde_VALUES,
                        backgroundColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                        borderColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Caruaru",
                        //*Número de presos por Núcleo*//
                        data: getEntradaCaruaru_VALUES,
                        backgroundColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Garanhuns",
                        //*Número de presos por Núcleo*//
                        data: getEntradaGaranhuns_VALUES,
                        backgroundColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)"],
                        borderColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)",],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Lagoa",
                        //*Número de presos  no Núcleo*//
                        data: getEntradaLagoa_VALUES,
                        backgroundColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Petrolina",
                        //*Número de presos por Núcleo*//
                        data:getEntradaPetrolina_VALUES,
                        backgroundColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Salgueiro",
                        //*Número de presos por Núcleo*//
                        data: getEntradaSalgueiro_VALUES,
                        backgroundColor:["rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)"],
                        borderColor:["rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)","rgba(153, 102, 255, 10)"],
                        borderWidth:2
                        },
                      ],
                    },
                    options:{
                      scales: {
                        yAxes: [{
                          scaleLabel: {
                            display: true,
                            labelString: 'Número de Presos'
                          }
                        }],
                        xAxes:[{
                          scaleLabel:{
                            fontColor: 'black',
                            display: true,
                            labelString: 'Motivos'
                          }
                        }]
                      }
                    }
                  });
                  async function chart_getEntradaArcoverde() {
                    const blob = await fetch("<?php echo site_url('chart/getEntradaArcoverde'); ?>");
                    const data = await blob.json();

                    getEntradaArcoverde_VALUES[0] = data.expiraPrazoCountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[1] = data.mandadoPrisCivilCountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[2] = data.mandadoPrisPrevCountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[3] = data.mandadoPrisTempCountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[4] = data.mandadoRecolhimentoCountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[6] = data.recapturaCountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[5] = data.transferenciaCountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[7] = data.transito2CountArcoverde.MOT_ENT_COUNT;
                    getEntradaArcoverde_VALUES[8] = data.outros2CountArcoverde.MOT_ENT_COUNT;
                    
                    chart_getEntrada.update();
                }
                chart_getEntradaArcoverde();

                async function chart_getEntradaCaruaru() {
                    const blob = await fetch("<?php echo site_url('chart/getEntradaCaruaru'); ?>");
                    const data = await blob.json();

                    getEntradaCaruaru_VALUES[0] = data.expiraPrazoCountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[1] = data.mandadoPrisCivilCountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[2] = data.mandadoPrisPrevCountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[3] = data.mandadoPrisTempCountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[4] = data.mandadoRecolhimentoCountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[6] = data.recapturaCountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[5] = data.transferenciaCountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[7] = data.transito2CountCaruaru.MOT_ENT_COUNT;
                    getEntradaCaruaru_VALUES[8] = data.outros2CountCaruaru.MOT_ENT_COUNT;
                    
                    chart_getEntrada.update();
                }
                chart_getEntradaCaruaru();

                async function chart_getEntradaGaranhuns() {
                    const blob = await fetch("<?php echo site_url('chart/getEntradaGaranhuns'); ?>");
                    const data = await blob.json();

                    getEntradaGaranhuns_VALUES[0] = data.expiraPrazoCountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[1] = data.mandadoPrisCivilCountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[2] = data.mandadoPrisPrevCountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[3] = data.mandadoPrisTempCountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[4] = data.mandadoRecolhimentoCountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[6] = data.recapturaCountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[5] = data.transferenciaCountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[7] = data.transito2CountGaranhuns.MOT_ENT_COUNT;
                    getEntradaGaranhuns_VALUES[8] = data.outros2CountGaranhuns.MOT_ENT_COUNT;
                    
                    chart_getEntrada.update();
                }
                chart_getEntradaGaranhuns();

                async function chart_getEntradaLagoa() {
                    const blob = await fetch("<?php echo site_url('chart/getEntradaLagoa'); ?>");
                    const data = await blob.json();

                    getEntradaLagoa_VALUES[0] = data.expiraPrazoCountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[1] = data.mandadoPrisCivilCountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[2] = data.mandadoPrisPrevCountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[3] = data.mandadoPrisTempCountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[4] = data.mandadoRecolhimentoCountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[6] = data.recapturaCountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[5] = data.transferenciaCountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[7] = data.transito2CountLagoa.MOT_ENT_COUNT;
                    getEntradaLagoa_VALUES[8] = data.outros2CountLagoa.MOT_ENT_COUNT;
                    
                    chart_getEntrada.update();
                }
                chart_getEntradaLagoa();



                async function chart_getEntradaPetrolina() {
                    const blob = await fetch("<?php echo site_url('chart/getEntradaPetrolina'); ?>");
                    const data = await blob.json();

                    getEntradaPetrolina_VALUES[0] = data.expiraPrazoCountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[1] = data.mandadoPrisCivilCountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[2] = data.mandadoPrisPrevCountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[3] = data.mandadoPrisTempCountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[4] = data.mandadoRecolhimentoCountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[6] = data.recapturaCountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[5] = data.transferenciaCountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[7] = data.transito2CountPetrolina.MOT_ENT_COUNT;
                    getEntradaPetrolina_VALUES[8] = data.outros2CountPetrolina.MOT_ENT_COUNT;
                    
                    chart_getEntrada.update();
                }
                chart_getEntradaPetrolina();

                async function chart_getEntradaSalgueiro() {
                    const blob = await fetch("<?php echo site_url('chart/getEntradaSalgueiro'); ?>");
                    const data = await blob.json();

                    getEntradaSalgueiro_VALUES[0] = data.expiraPrazoCountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[1] = data.mandadoPrisCivilCountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[2] = data.mandadoPrisPrevCountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[3] = data.mandadoPrisTempCountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[4] = data.mandadoRecolhimentoCountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[6] = data.recapturaCountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[5] = data.transferenciaCountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[7] = data.transito2CountSalgueiro.MOT_ENT_COUNT;
                    getEntradaSalgueiro_VALUES[8] = data.outros2CountSalgueiro.MOT_ENT_COUNT;
                    
                    chart_getEntrada.update();
                }
                chart_getEntradaSalgueiro();
            </script>        
            
            <script>
            var ctx = document.getElementsByClassName("doughnut-chart3");

            var chartGraph = new Chart(ctx, {
                type: 'doughnut',
                data:{
                  labels: ["Audiência Presencial","Consulta Médica","Consulta Odontológica","Emergência","Escolta Funeral","Exames Complexos","Exames Laboratoriais","Internação Hospitalar","Outros"],
                  datasets:[
                    { label:"Entrada de Presos",
                      //*Número de presos por Núcleo*//
                      data:[50,300,210,300,400,500,600,700,800],
                      backgroundColor:["rgba(255, 99, 132, 10)","rgba(255, 159, 64, 10)","rgba(255, 205, 86, 10)","rgba(75, 192, 192, 10)","rgba(54, 162, 235, 10)","rgba(153, 102, 255, 10)","rgba(255,20,14,10)","rgba(255,255,0,10)","rgba(139,0,139,10)"],
                      borderColor:["rgba(255, 99, 132, 10)","rgba(255, 159, 64, 10)","rgba(255, 205, 86, 10)","rgba(75, 192, 192, 10)","rgba(54, 162, 235, 10)","rgba(153, 102, 255, 10)","rgba(255,20,14,10)","rgba(255,255,0,10)","rgba(139,0,139,10)"],
                      borderWidth:2
                      },
                    ],
                  },
                  options:{
                    legend:{
                      position: 'left'
                    }
                  }
                });
          </script>       
          
          <script>
            var ctx = document.getElementsByClassName("doughnut-chart2");

            var chartGraph = new Chart(ctx, {
                type: 'doughnut',
                data:{
                  labels: ["Alvará de Soltura","Delegacia","Domiciliar COVID","Evasão","Fim de Prazo da Prisão Civil","Fim de prazo da Prisão Temporária","Fuga","Harmonizado","Liberdade Condicional","Óbito","Óbito CVLI","Prisão Domicilar","Progressão de Regime","Transferência P/CP","Transferência P/UF","Transferência P/UP","Trânsito","Outros"],
                  datasets:[
                    { label:"Nome da CP",
                      //*Número de presos por Núcleo*//
                      data:[50,300,210,300,400,201,190,103,401,021,491,030,194,102,100,190,102,193],
                      backgroundColor:["rgba(255, 99, 132, 10)","rgba(255, 159, 64, 10)","rgba(255, 205, 86, 10)","rgba(75, 192, 192, 10)","rgba(54, 162, 235, 10)","rgba(153, 102, 255, 10)","rgba(255,20,14,10)","rgba(255,255,0,10)","rgba(139,0,139,10)","rgba(0, 0, 0, 10)","rgba(0, 0, 255, 10)","rgba(0, 191, 255, 10)","rgba(0, 0, 128, 10)","rgba(0, 255, 127, 10)","rgba(210,105,30,10)","rgba(75,0,130,10)","rgba(255,228,181,10)","rgba(238,232,170,10)"],
                      borderColor:["rgba(255, 99, 132, 10)","rgba(255, 159, 64, 10)","rgba(255, 205, 86, 10)","rgba(75, 192, 192, 10)","rgba(54, 162, 235, 10)","rgba(153, 102, 255, 10)","rgba(255,20,14,10)","rgba(255,255,0,10)","rgba(139,0,139,10)","rgba(0, 0, 0, 10)","rgba(0, 0, 255, 10)","rgba(0, 191, 255, 10)","rgba(0, 0, 128, 10)","rgba(0, 255, 127, 10)","rgba(210,105,30,10)","rgba(75,0,130,10)","rgba(255,228,181,10)","rgba(238,232,170,10)"],
                      borderWidth:2
                      },
                    ],
                  },
                  options:{
                    legend:{
                      position: 'left'
                    }
                  }
                });
          </script>          

<!--Font Awesome My Link-->
<script src="https://kit.fontawesome.com/3db1420b56.js" crossorigin="anonymous"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/aaaa", {"placeholder": "dd/mm/aaaa"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/aaaa", {"placeholder": "mm/dd/aaaa"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
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
        function (start, end) {
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
