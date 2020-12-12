<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMT | Revistas e Apreensões</title>
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
                <a href="<?php echo site_url('Login'); ?>" class="nav-link" style="height: 50px;">Sair</a>
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
          <p>Zaqueu Souza</p>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><p>REVISTAS E APREENSÕES</p></h1>
      <ol class="breadcrumb"> <!--Area referente ao Mapa de navegação do site (Precisa de melhorias)-->
        <li><a href="<?php echo site_url('Home');?>">Home</a></li>
        <li class="active">Revistas e Apreensões</li>
      </ol>
      <!-- Main content -->
      <div class="box">
      <!-- /.box-header -->
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <label>Centro Prisional</label>
            <select class="form-control" style="width: 200px" name="cadeiapublica"><!-- 'name=' adicionado-->
              <option>CP de Aliança</option>
              <option>CP de Carpina</option>
          		<option>CP de Glória do Goitá</option>
          		<option>CP de Goiana</option>
          		<option>CP de Itambé</option>
          		<option>CP de Lagoa do Carro</option>
          		<option>CP de Macaparana</option>
          		<option>CP de Nazaré da Mata</option>
          		<option>CP de Timbauba</option>
          		<option>CP de Vicência</option>
          	</select>
            <tr>
              <th>Itens Apreendidos</th>
              <th>QTD</th>
              <th>Itens Apreendidos</th>
              <th>QTD<button class="btn btn-primary btn-xs pull-right">Registrar</button></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Armas artesanais - Branca</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Chips de celular</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Armas artesanais - Fogo</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Cocaína</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Armas industriais - Branca</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Cola de sapateiro</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Armas industriais - Fogo</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Corda artesanal</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Bateria de celular</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Crack</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Bebida artesanal</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Maconha</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Bebida industrial</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Medicação Psicotrópicos</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Carregador celular</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Munições</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
            <tr>
              <td>Celular</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
              <td>Outro</td>
              <td><input type="text" class="form-control" name="resumoentrada" placeholder="Quantidade" style="width:100px " maxlength="10"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
</div>

  

  

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<!--Font Awesome My Link-->
<script src="https://kit.fontawesome.com/3db1420b56.js" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
