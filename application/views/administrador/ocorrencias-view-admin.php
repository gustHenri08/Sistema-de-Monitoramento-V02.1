<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMP | Registro de Ocorrências </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Ionicons/css/ionicons.min.css">
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
        Ocorrências de Presos
      </h1>
      <ol class="breadcrumb"> <!--Area referente ao Mapa de navegação do site (Precisa de melhorias)-->
        <li><a href="<?php echo site_url('Home/adminHome'); ?>">Home</a></li>
        <li class="active">Ocorrências</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
             <h3 class="box-title"> Lista de Detentos </h3>
            
              </div>
           <!-- /.box-header -->
           <div class="box-body">
              <div class="col-sm-6">
              <form action="<?=site_url('ocorrencias/resultadoadmin')?>" method="post">
                  <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                      <label>Procurar Presos:  <input type="text" name="busca" id="busca" class="form-control input-sm" placeholder="Nome" aria-controls="example1">
                        <br><button type="submit" class="btn btn-primary">Buscar</button></br>
                      </label> <!--colocar um if-else para tentar fazer o campo busca buscar os dados pelo que foi solicitado -->
                    </div>
                  </div>
                </form>
                <br></br>   
                </div>
              </div>
             <table id="example2" class="table table-bordered table-hover">
               <thead>
               <tr>
                 <th>CP</th>
                 <th>Nome</th>
                 <th>Nome da Mãe</th>
                 <th>Nome do Pai</th>
                 <th>SIAP</td>
                 <th>Cadastro</td>
                 <th>Visualizar</td>
               </tr>
               </thead>
               <tbody>
                 <tr>
                 <?php foreach($saidadetentos as $presos) : ?>
                    <tr>
                      <td><?= $presos['cadeiapublica']?></td>
                      <td> <?= $presos['nome']?> </td>
                      <td><?= $presos['nomemae']?></td>
                      <td><?= $presos['nomepai']?></td>
                      <td><?= $presos['nsiap']?></td>

                      <td>
                            <a href="<?= base_url() ?>index.php/ocorrencias/cadastrarMasteradmin/<?= $presos["id"] ?>" class="btn btn-primary btn-xs">Cadastrar</a>
                      </td>
                      <td> <form action="<?=site_url('ocorrencias/resultado_lista')?>" method="post"> 
                      <input  type="hidden" name="busca" id="busca"  value="<?= $presos['nome']?>" >  <!-- 'name=' adicionado-->
                      <button type="submit" class="btn btn-primary btn-xs"  >Visualizar</button>
                       </form>                 
                      </td>
                      <td style='text-align:center'>
                      </td>
                    </tr>
                  <?php endforeach?>
                 </tr>
               </tbody>
             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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

</div>  <!--Fim da div Wrapper-->

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
</body>
</html>
