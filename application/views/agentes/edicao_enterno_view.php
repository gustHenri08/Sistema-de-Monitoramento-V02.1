<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Ionicons/css/ionicons.min.css">
  <!--DataTables-->
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

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
          <a href="<?php echo site_url('Home'); ?>"> <!-- Link do Home, ao ser clicado ele retorna o controller-->
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
          <a href="<?php echo site_url(''); ?>">
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
            <span>Saida do Detento</span>
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
          <a href="<?php echo site_url(''); ?>">
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
  </aside>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Cabeçalho da Página -->
    <section class="content-header">
      <h1>
      Edição
      </h1>
      <ol class="breadcrumb"> <!--Area referente ao Mapa de navegação do site (Precisa de melhorias)mlp-->
        <li><a href="http://localhost/Sistema-de-Monitoramento-V02/index.php/Home">Home</a></li>
        <li class="active"><a href="http://localhost/Sistema-de-Monitoramento-V02/index.php/SaidapresosAudiencia">Saída de Detentos</a></li>
        <li class="active">Cadastro</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Cadastro</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <!--Inicio do Formulario-->
            <!--Inicio do Formulario-->
            <?php if(isset($saidadetentos)) : ?>
              <form method="post" action="<?= base_url() ?>index.php/Saidatransito/updatee/<?= $saidadetentos["id"] ?>"> <!-- Chama a funtion de edição e para o id que será editado -->
  
              <!--Em Testes | chama o controller responsavel por cadastro-->              
            <?php endif; ?>
             <!--Em Testes | chama o controller responsavel por cadastro-->
           
             <div class="form-group"> <!-- Nome do Detento-->
          		<label>Agente Penitenciário</label>
          		<input type="text" class="form-control" name="cadastrante" placeholder="Agente Penitenciário" value="<?= isset($agentes) ? ($this->session->userdata("nomecompleto")) : ($this->session->userdata("nomecompleto"))?>"  readonly style="width:300px"><!-- 'name=' adicionado-->
            </div>
            
            <div class="form-group"> <!-- Nome do Detento-->
          		<label>Função Agente</label>
          		<input type="text" class="form-control" name="funcaocadastrante" placeholder="Função Agente" value="<?= isset($agentes) ? ($this->session->userdata("funcao")) : ($this->session->userdata("funcao"))?>"  readonly style="width:300px"><!-- 'name=' adicionado-->
            </div>
            
            <div class="form-group"> <!-- Nome do Detento-->
          		<label>Matrícula Agente</label>
          		<input type="text" class="form-control" name="matriculacadastrante" placeholder="Matricula Agente" value="<?= isset($agentes) ? ($this->session->userdata("matricula")) : ($this->session->userdata("matricula"))?>"  readonly style="width:300px"><!-- 'name=' adicionado-->
            </div>
           
            <div class="form-group"> <!-- Nome do Detento-->
          		<label>Cadeia publica</label>
          		<input type="text" class="form-control" name="cadeiapublica" placeholder="Cadeia Publica" style="width:300px" readonly value=" <?=$saidadetentos["cadeiapublica"]?>" readonly style="width:300px"><!-- 'name=' adicionado-->
          	</div>

            <div class="form-group">
              <label>Data</label>
              <input type="date" class="form-control" name="data" placeholder="dd/mm/aaaa" style="width:300px"  ><!-- 'name=' adicionado-->
              </div>

            <div class="form-group"> <!-- Nome do Detento-->
              <label>Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome" style="width:300px" value="<?= isset($saidadetentos) ? $saidadetentos["nome"] : "" ?>" readonly style="width:300px"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome dpa Mãjbejjee-->
              <label>Nº SIAP</label>
              <input type="text" class="form-control" name="numsiap" placeholder="Nº SIAP" style="width:300px" value="<?= isset($saidadetentos) ? $saidadetentos["numsiap"] : "" ?>"readonly style="width:300px"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome do Pai-->
              <label>SIC</label>
              <input type="text" class="form-control" name="sic" placeholder="SIC" style="width:300px" value="<?= isset($saidadetentos) ? $saidadetentos["sic"] : "" ?>"readonly style="width:300px"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!--Campo Cadeia Publica-->
                <label>Motivo</label>
                <?php if(isset($saidadetentos)): ?>  
                <select class="form-control" style="width: 200px" name="motivo" >  <!-- 'name=' adicionado-->
                  <option><?=$saidadetentos["motivo"]?></option>
                  <option>Audiência</option>
                  <option>Custódia Hospitalar</option>
                  <option>Determinação SERES</option>
                  <option>Determinação SSPEN </option>
                  <option>Medida de Segurança</option>
                  <option>Outro Motivo</option>
                  <option>Tratamento Médico</option>
                  <option>Outro</option>
                </select>
                <?php else: ?>
                <select class="form-control" style="width: 200px" name="motivo" >  <!-- 'name=' adicionado-->
                  <option>AUDIÊNCIA</option>
                  <option>CUSTÓDIA HOSPITALAR</option>
                  <option>DETERMINAÇÃO SERES</option>
                  <option>DETERMINAÇÃO SSPEN </option>
                  <option>MEDIDA DE SEGURANÇA</option>
                  <option>OUTRO MOTIVO</option>
                  <option>TRATAMENTO MÉDICO</option>
                  <option>OUTRO</option>
                </select>
                <?php endif; ?>
            </div>
            

              <div class="form-group"> <!-- Nome do Pai-->
              <label>Obs Gerais</label>
              <input type="text" class="form-control" name="obs" placeholder="obs" style="width:300px" value="<?= isset($saidadetentos) ? $saidadetentos["obs"] : "" ?>" ><!-- 'name=' adicionado-->
            </div>

              <div class="form-group"> <!-- Nome do Pai-->
              <label>Documentação</label>
              <input type="text" class="form-control" name="documentacao" placeholder="Documentação" style="width:300px" value="<?= isset($saidadetentos) ? $saidadetentos["documentacao"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome do Pai-->
              <label>Destino</label>
              <input type="text" class="form-control" name="destino" placeholder="Destino" style="width:300px" value="<?= isset($saidadetentos) ? $saidadetentos["destino"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

            <br>

            <?php if(isset($saidadetentos)) :?>

<div class="col-xs-2"> <!--Botão Cadastrar-->
  <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
</div>

<?php else: ?>
<div class="col-xs-2"> <!--Botão Cadastrar-->
  <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
</div>

<?php endif; ?>
<div class="col-xs-2"> <!--Botão Cadastrar-->
<a href="<?php echo site_url('Home/transitoExterno'); ?>" class="btn btn-danger btn-block btn-flat">Voltar</a><!--Botão atualizado pq não estav fazendo o 'submit'-->
</div>

          </form>
          <!--Fim do Formulario-->
        </div>
        <!-- Fim do Box Body -->
      </div>
      <!-- Fim do Box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2020 Fábrica de Software.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!--Font Awesome My Link-->
<script src="https://kit.fontawesome.com/3db1420b56.js" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
  })
</script>
</body>
</html>
