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
            <div class="col-md-10">
              <h3>Motivo de Saída de Presos</h3>
              <canvas class="bar-chart3"></canvas>
              <canvas class="bar-chart4">></canvas>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <h3>Motivo de Autorização de Saída de Presos</h3>
                <canvas class="bar-chart5"></canvas>
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
                      { label:"Núcleo Arcoverde",
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
                      { label:"Núcleo Arcoverde",
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
            var ctx = document.getElementsByClassName("bar-chart5");
            var getAutSaidaArcoverde_VALUES = [0,0,0,0,0,0,0,0];
            var getAutSaidaCaruaru_VALUES = [0,0,0,0,0,0,0,0];
            var getAutSaidaGaranhuns_VALUES = [0,0,0,0,0,0,0,0];
            var getAutSaidaLagoa_VALUES = [0,0,0,0,0,0,0,0];
            var getAutSaidaPetrolina_VALUES = [0,0,0,0,0,0,0,0];
            var getAutSaidaSalgueiro_VALUES = [0,0,0,0,0,0,0,0];

            var getAutSaidaAdmin_chartGraph = new Chart(ctx, {
                type: 'bar',
                data:{
                  labels: ["Audiência Presencial","Consulta Médica","Consulta Odontológica","Emergência","Escolta Funeral","Exames Complexos","Exames Laboratoriais","Internação Hospitalar","Outros"],
                  datasets:[
                    { label:"Núcleo Arcoverde",
                        //*Número de presos por Núcleo*//
                        data: getAutSaidaArcoverde_VALUES,
                        backgroundColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                        borderColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Caruaru",
                        //*Número de presos por Núcleo*//
                        data: getAutSaidaCaruaru_VALUES,
                        backgroundColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Garanhuns",
                        //*Número de presos por Núcleo*//
                        data: getAutSaidaGaranhuns_VALUES,
                        backgroundColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)"],
                        borderColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)",],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Lagoa",
                        //*Número de presos  no Núcleo*//
                        data: getAutSaidaLagoa_VALUES,
                        backgroundColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Petrolina",
                        //*Número de presos por Núcleo*//
                        data:getAutSaidaPetrolina_VALUES,
                        backgroundColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Salgueiro",
                        //*Número de presos por Núcleo*//
                        data: getAutSaidaSalgueiro_VALUES,
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
                            labelString: 'Número de Autorizações'
                          }
                        }],
                        xAxes:[{
                          scaleLabel:{
                            fontColor: 'black',
                            display: true,
                            labelString: 'Motivos'
                          },
                          ticks: {
                          suggestedMin: 0,
                          beginAtZero: true
                         }
                        }]
                      }
                    
                  
                  }
                });
                async function chart_getAutSaidaArcoverde() {
                    const blob = await fetch("<?php echo site_url('Chart/getAutorizaSaidaArcoverde'); ?>");
                    const data = await blob.json();

                    getAutSaidaArcoverde_VALUES[0] = data.audienciaCountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaArcoverde_VALUES[1] = data.consultaMedCountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaArcoverde_VALUES[2] = data.consultaOdontoCountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaArcoverde_VALUES[3] = data.EmergenciaCountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaArcoverde_VALUES[4] = data.EscoltaFunCountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaArcoverde_VALUES[5] = data.ExamesComplexCountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaArcoverde_VALUES[6] = data.ExamesLaboratorCountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaArcoverde_VALUES[7] = data.outros3CountArcoverde.AUT_AUD_COUNT;
                    getAutSaidaAdmin_chartGraph.update();
                }
                chart_getAutSaidaArcoverde();

                async function chart_getAutSaidaCaruaru() {
                    const blob = await fetch("<?php echo site_url('Chart/getAutorizaSaidaCaruaru'); ?>");
                    const data = await blob.json();

                    getAutSaidaCaruaru_VALUES[0] = data.audienciaCountCaruaru.AUT_AUD_COUNT;
                    getAutSaidaCaruaru_VALUES[1] = data.consultaMedCounCaruaru.AUT_AUD_COUNT;
                    getAutSaidaCaruaru_VALUES[2] = data.consultaOdontoCountCaruaru.AUT_AUD_COUNT;
                    getAutSaidaCaruaru_VALUES[3] = data.EmergenciaCountCaruaru.AUT_AUD_COUNT;
                    getAutSaidaCaruaru_VALUES[4] = data.EscoltaFunCountCaruaru.AUT_AUD_COUNT;
                    getAutSaidaCaruaru_VALUES[5] = data.ExamesComplexCountCaruaru.AUT_AUD_COUNT;
                    getAutSaidaCaruaru_VALUES[6] = data.ExamesLaboratorCountCaruaru.AUT_AUD_COUNT;
                    getAutSaidaCaruaru_VALUES[7] = data.outros3CountCaruaru.AUT_AUD_COUNT;
                    getAutSaidaAdmin_chartGraph.update();

                }
                chart_getAutSaidaCaruaru();

                async function chart_getAutSaidaGaranhuns() {
                    const blob = await fetch("<?php echo site_url('Chart/getAutorizaSaidaGaranhuns'); ?>");
                    const data = await blob.json();

                    getAutSaidaGaranhuns_VALUES[0] = data.audienciaCountGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaGaranhuns_VALUES[1] = data.consultaMedCounGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaGaranhuns_VALUES[2] = data.consultaOdontoCountGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaGaranhuns_VALUES[3] = data.EmergenciaCountGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaGaranhuns_VALUES[4] = data.EscoltaFunCountGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaGaranhuns_VALUES[5] = data.ExamesComplexCountGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaGaranhuns_VALUES[6] = data.ExamesLaboratorCountGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaGaranhuns_VALUES[7] = data.outros3CountGaranhuns.AUT_AUD_COUNT;
                    getAutSaidaAdmin_chartGraph.update();

                }
                chart_getAutSaidaGaranhuns();

                async function chart_getAutSaidaLagoa() {
                    const blob = await fetch("<?php echo site_url('Chart/getAutorizaSaidaLagoa'); ?>");
                    const data = await blob.json();

                    getAutSaidaLagoa_VALUES[0] = data.audienciaCountLagoa.AUT_AUD_COUNT;
                    getAutSaidaLagoa_VALUES[1] = data.consultaMedCountLagoa.AUT_AUD_COUNT;
                    getAutSaidaLagoa_VALUES[2] = data.consultaOdontoCountLagoa.AUT_AUD_COUNT;
                    getAutSaidaLagoa_VALUES[3] = data.EmergenciaCountLagoa.AUT_AUD_COUNT;
                    getAutSaidaLagoa_VALUES[4] = data.EscoltaFunCountLagoa.AUT_AUD_COUNT;
                    getAutSaidaLagoa_VALUES[5] = data.ExamesComplexCountLagoa.AUT_AUD_COUNT;
                    getAutSaidaLagoa_VALUES[6] = data.ExamesLaboratorCountLagoa.AUT_AUD_COUNT;
                    getAutSaidaLagoa_VALUES[7] = data.outros3CountLagoa.AUT_AUD_COUNT;
                    getAutSaidaAdmin_chartGraph.update();

                }
                chart_getAutSaidaLagoa();

                async function chart_getAutSaidaPetrolina() {
                    const blob = await fetch("<?php echo site_url('Chart/getAutorizaSaidaPetrolina'); ?>");
                    const data = await blob.json();

                    getAutSaidaPetrolina_VALUES[0] = data.audienciaCountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaPetrolina_VALUES[1] = data.consultaMedCountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaPetrolina_VALUES[2] = data.consultaOdontoCountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaPetrolina_VALUES[3] = data.EmergenciaCountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaPetrolina_VALUES[4] = data.EscoltaFunCountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaPetrolina_VALUES[5] = data.ExamesComplexCountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaPetrolina_VALUES[6] = data.ExamesLaboratorCountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaPetrolina_VALUES[7] = data.outros3CountPetrolina.AUT_AUD_COUNT;
                    getAutSaidaAdmin_chartGraph.update();

                }
                chart_getAutSaidaPetrolina();

                async function chart_getAutSaidaSalgueiro() {
                    const blob = await fetch("<?php echo site_url('Chart/getAutorizaSaidaSalgueiro'); ?>");
                    const data = await blob.json();

                    getAutSaidaSalgueiro_VALUES[0] = data.audienciaCountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaSalgueiro_VALUES[1] = data.consultaMedCountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaSalgueiro_VALUES[2] = data.consultaOdontoCountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaSalgueiro_VALUES[3] = data.EmergenciaCountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaSalgueiro_VALUES[4] = data.EscoltaFunCountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaSalgueiro_VALUES[5] = data.ExamesComplexCountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaSalgueiro_VALUES[6] = data.ExamesLaboratorCountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaSalgueiro_VALUES[7] = data.outros3CountSalgueiro.AUT_AUD_COUNT;
                    getAutSaidaAdmin_chartGraph.update();

                }
                chart_getAutSaidaSalgueiro();

                
          </script>       
          
          <script>
            var ctx = document.getElementsByClassName("bar-chart3");
            var getexitArcoverde_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitCaruaru_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitGaranhuns_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitLagoa_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitPetrolina_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitSalgueiro_VALUES = [0,0,0,0,0,0,0,0,0];
            var chart_getexit = new Chart(ctx, {
                type: 'bar',
                data:{
                  labels: ["Alvará de Soltura","Delegacia","Domiciliar COVID","Evasão","Fim de Prazo da Prisão Civil","Fim de prazo da Prisão Temporária","Fuga","Harmonizado","Liberdade Condicional"],
                  datasets:[
                    { label:"Núcleo de Arcoverde",
                      //*Número de presos por Núcleo*//
                      data: getexitArcoverde_VALUES,
                      backgroundColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                      borderColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                      borderWidth:2
                      },
                      {
                      label:"Núcleo Caruaru",
                        //*Número de presos por Núcleo*//
                        data: getexitCaruaru_VALUES,
                        backgroundColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Garanhuns",
                        //*Número de presos por Núcleo*//
                        data: getexitGaranhuns_VALUES,
                        backgroundColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)"],
                        borderColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)",],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Lagoa",
                        //*Número de presos  no Núcleo*//
                        data: getexitLagoa_VALUES,
                        backgroundColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Petrolina",
                        //*Número de presos por Núcleo*//
                        data:getexitPetrolina_VALUES,
                        backgroundColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Salgueiro",
                        //*Número de presos por Núcleo*//
                        data: getexitSalgueiro_VALUES,
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
                            labelString: 'Número de Saídas'
                          }
                        }],
                        xAxes:[{
                          scaleLabel:{
                            fontColor: 'black',
                            display: true,
                            labelString: 'Motivos'
                          },
                          ticks: {
                          suggestedMin: 0,
                          beginAtZero: true
                         }
                        }]
                      }
                    }
                });
                async function chart_getexitArcoverde(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitArcoverde');?>");
                  const data = await blob.json();

                    getexitArcoverde_VALUES[0] = data.alvaraCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[1] = data.delegCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[2] = data.domicCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[3] = data.evasaoCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[4] = data.fimPrazoCivilCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[5] = data.fimPrazoTempCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[6] = data.fugaCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[7] = data.HarmCountArcoverde.MOT_COUNT;
                    getexitArcoverde_VALUES[8] = data.condCountArcoverde.MOT_COUNT;
                    chart_getexit.update();
                }
                chart_getexitArcoverde();

                async function chart_getexitCaruaru(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitCaruaru');?>");
                  const data = await blob.json();

                    getexitCaruaru_VALUES[0] = data.alvaraCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[1] = data.delegCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[2] = data.domicCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[3] = data.evasaoCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[4] = data.fimPrazoCivilCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[5] = data.fimPrazoTempCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[6] = data.fugaCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[7] = data.HarmCountCaruaru.MOT_COUNT;
                    getexitCaruaru_VALUES[8] = data.condCountCaruaru.MOT_COUNT;
                    chart_getexit.update();
                }
                chart_getexitCaruaru();

                async function chart_getexitGaranhuns(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitGaranhuns');?>");
                  const data = await blob.json();

                    getexitGaranhuns_VALUES[0] = data.alvaraCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[1] = data.delegCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[2] = data.domicCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[3] = data.evasaoCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[4] = data.fimPrazoCivilCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[5] = data.fimPrazoTempCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[6] = data.fugaCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[7] = data.HarmCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns_VALUES[8] = data.condCountGaranhuns.MOT_COUNT;
                    chart_getexit.update();
                }
                chart_getexitGaranhuns();

                async function chart_getexitLagoa(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitLagoa');?>");
                  const data = await blob.json();

                    getexitLagoa_VALUES[0] = data.alvaraCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[1] = data.delegCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[2] = data.domicCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[3] = data.evasaoCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[4] = data.fimPrazoCivilCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[5] = data.fimPrazoTempCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[6] = data.fugaCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[7] = data.HarmCountLagoa.MOT_COUNT;
                    getexitLagoa_VALUES[8] = data.condCountLagoa.MOT_COUNT;
                    chart_getexit.update();
                }
                chart_getexitLagoa();

                async function chart_getexitPetrolina(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitPetrolina');?>");
                  const data = await blob.json();

                    getexitPetrolina_VALUES[0] = data.alvaraCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[1] = data.delegCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[2] = data.domicCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[3] = data.evasaoCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[4] = data.fimPrazoCivilCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[5] = data.fimPrazoTempCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[6] = data.fugaCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[7] = data.HarmCountPetrolina.MOT_COUNT;
                    getexitPetrolina_VALUES[8] = data.condCountPetrolina.MOT_COUNT;
                    chart_getexit.update();
                }
                chart_getexitPetrolina();

                async function chart_getexitSalgueiro(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitSalgueiro');?>");
                  const data = await blob.json();

                    getexitSalgueiro_VALUES[0] = data.alvaraCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[1] = data.delegCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[2] = data.domicCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[3] = data.evasaoCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[4] = data.fimPrazoCivilCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[5] = data.fimPrazoTempCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[6] = data.fugaCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[7] = data.HarmCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro_VALUES[8] = data.condCountSalgueiro.MOT_COUNT;
                    chart_getexit.update();
                }
                chart_getexitSalgueiro();


                
          </script>          

          <script>
            var ctx = document.getElementsByClassName("bar-chart4");
            var getexitArcoverde2_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitCaruaru2_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitGaranhuns2_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitLagoa2_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitPetrolina2_VALUES = [0,0,0,0,0,0,0,0,0];
            var getexitSalgueiro2_VALUES = [0,0,0,0,0,0,0,0,0];
            var chart_getexit2 = new Chart(ctx, {
                type: 'bar',
                data:{
                  labels: ["Óbito","Óbito CVLI","Prisão Domiciliar","Progressão de Regime","Transferência P/CP","Transferência P/UF","Transferência P/UP","Trânsito","Outros"],
                  datasets:[
                    { label:"Núcleo de Arcoverde",
                      //*Número de presos por Núcleo*//
                      data: getexitArcoverde2_VALUES,
                      backgroundColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                      borderColor:["rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)","rgba(255, 99, 132, 10)"],
                      borderWidth:2
                      },
                      {
                      label:"Núcleo Caruaru",
                        //*Número de presos por Núcleo*//
                        data: getexitCaruaru2_VALUES,
                        backgroundColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderColor:["rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)","rgba(255, 159, 64, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Garanhuns",
                        //*Número de presos por Núcleo*//
                        data: getexitGaranhuns2_VALUES,
                        backgroundColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)"],
                        borderColor:["rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)","rgba(255, 205, 86, 10)",],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Lagoa",
                        //*Número de presos  no Núcleo*//
                        data: getexitLagoa2_VALUES,
                        backgroundColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderColor:["rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)","rgba(75, 192, 192, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Petrolina",
                        //*Número de presos por Núcleo*//
                        data:getexitPetrolina2_VALUES,
                        backgroundColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderColor:["rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)","rgba(54, 162, 235, 10)"],
                        borderWidth:2
                        },
                        {
                        label:"Núcleo Salgueiro",
                        //*Número de presos por Núcleo*//
                        data: getexitSalgueiro2_VALUES,
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
                            labelString: 'Número de Saídas'
                          }
                        }],
                        xAxes:[{
                          scaleLabel:{
                            fontColor: 'black',
                            display: true,
                            labelString: 'Motivos'
                          },
                          ticks: {
                          suggestedMin: 0,
                          beginAtZero: true
                         }
                        }]
                      }
                    }
                });
                async function chart_getexitArcoverde(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitArcoverde');?>");
                  const data = await blob.json();

                    getexitArcoverde2_VALUES[0] = data.obitoCountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[1] = data.obitoCVLICountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[2] = data.PrisaoDomiCountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[3] = data.ProgressRegimeCountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[4] = data.transfCpCountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[5] = data.transfUfCountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[6] = data.transfUpCountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[7] = data.transitoCountArcoverde.MOT_COUNT;
                    getexitArcoverde2_VALUES[8] = data.outrosCountArcoverde.MOT_COUNT;
                    chart_getexit2.update();
                }
                chart_getexitArcoverde();

                async function chart_getexitCaruaru(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitCaruaru');?>");
                  const data = await blob.json();

                    getexitCaruaru2_VALUES[0] = data.obitoCountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[1] = data.obitoCVLICountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[2] = data.PrisaoDomiCountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[3] = data.ProgressRegimeCountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[4] = data.transfCpCountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[5] = data.transfUfCountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[6] = data.transfUpCountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[7] = data.transitoCountCaruaru.MOT_COUNT;
                    getexitCaruaru2_VALUES[8] = data.outrosCountCaruaru.MOT_COUNT;
                    chart_getexit2.update();
                }
                chart_getexitCaruaru();

                async function chart_getexitGaranhuns(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitGaranhuns');?>");
                  const data = await blob.json();

                    getexitGaranhuns2_VALUES[0] = data.obitoCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[1] = data.obitoCVLICountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[2] = data.PrisaoDomiCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[3] = data.ProgressRegimeCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[4] = data.transfCpCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[5] = data.transfUfCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[6] = data.transfUpCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[7] = data.transitoCountGaranhuns.MOT_COUNT;
                    getexitGaranhuns2_VALUES[8] = data.outrosCountGaranhuns.MOT_COUNT;
                    chart_getexit2.update();
                }
                chart_getexitGaranhuns();

                async function chart_getexitLagoa(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitLagoa');?>");
                  const data = await blob.json();

                    getexitLagoa2_VALUES[0] = data.obitoCountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[1] = data.obitoCVLICountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[2] = data.PrisaoDomiCountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[3] = data.ProgressRegimeCountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[4] = data.transfCpCountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[5] = data.transfUfCountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[6] = data.transfUpCountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[7] = data.transitoCountLagoa.MOT_COUNT;
                    getexitLagoa2_VALUES[8] = data.outrosCountLagoa.MOT_COUNT;
                    chart_getexit2.update();
                }
                chart_getexitLagoa();

                async function chart_getexitPetrolina(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitPetrolina');?>");
                  const data = await blob.json();

                    getexitPetrolina2_VALUES[0] = data.obitoCountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[1] = data.obitoCVLICountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[2] = data.PrisaoDomiCountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[3] = data.ProgressRegimeCountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[4] = data.transfCpCountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[5] = data.transfUfCountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[6] = data.transfUpCountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[7] = data.transitoCountPetrolina.MOT_COUNT;
                    getexitPetrolina2_VALUES[8] = data.outrosCountPetrolina.MOT_COUNT;
                    chart_getexit2.update();
                }
                chart_getexitPetrolina();

                async function chart_getexitSalgueiro(){
                  const blob = await fetch("<?php echo site_url('Chart/getexitSalgueiro');?>");
                  const data = await blob.json();

                    getexitSalgueiro2_VALUES[0] = data.obitoCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[1] = data.obitoCVLICountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[2] = data.PrisaoDomiCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[3] = data.ProgressRegimeCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[4] = data.transfCpCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[5] = data.transfUfCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[6] = data.transfUpCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[7] = data.transitoCountSalgueiro.MOT_COUNT;
                    getexitSalgueiro2_VALUES[8] = data.outrosCountSalgueiro.MOT_COUNT;
                    chart_getexit2.update();
                }
                chart_getexitSalgueiro();


                
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
