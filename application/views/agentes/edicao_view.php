<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMT | Cadastro de Saída de Detentos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com
  /html5shiv/3.7.3/html5shiv.min.js"></script>
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
          <a href="<?php echo site_url('Home'); ?>">
            <i class="fa fa-registered"></i>
            <span>Ocorrências</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Ocorrencias'); ?>"><i class="fa fa-registered"></i> Registro de Ocorrências </a></li>
            <li><a href="<?php echo site_url('Outras_ocorrencias'); ?>"><i class="fa fa-registered"></i> Outras Ocorrências </a></li>
            <li><a href="<?php echo site_url('Apreensoes'); ?>"><i class="fa fa-ban"></i> Revistas e Apreensões </a></li>

          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('SemiAberto_e_Aberto'); ?> ">
            <i class="fa fa-file-text-o"></i>
            <span>Relação Aberto / Semi-Aberto</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('Home'); ?>">
            <i class="fa fa-user-times"></i>
            <span>Saida do Detento</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Saidapresos'); ?>"><i class="fa fa-key"></i> Saída da Cadeia Pública</a></li>
            <li><a href="<?php echo site_url('SaidapresosAudiencia'); ?>"><i class="fa fa-cab"></i> Saída para Audiência</a></li>
            <li><a href="<?php echo site_url('SaidapresosMedica'); ?>"><i class="fa fa-ambulance"></i> Saída Médica</a></li>
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
            <li><a href="<?php echo site_url('TransitoInterno'); ?>"><i class="fa fa-refresh"></i> Trânsito Interno</a></li>
            <li><a href="<?php echo site_url('TransitoExterno'); ?>"><i class="fa fa-exchange"></i> Trânsito Externo</a></li>
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
       Edição do Cadastro de Saída de Detentos
      </h1>
      <ol class="breadcrumb"> <!--Area referente ao Mapa de navegação do site (Precisa de melhorias)mlp-->
        <li><a href="http://localhost/Sistema-de-Monitoramento-V02/index.php/Home">Home</a></li>
        <li class="active"><a href="http://localhost/Sistema-de-Monitoramento-V02/index.php/Saidapresos">Saída de Detentos</a></li>
        <li class="active">Cadastrar saida</li>
      </ol>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edição</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <!--Inicio do Box Body-->
        <div class="box-body">
          <!--Inicio do Formulario-->
          <?php if(isset($saidadetentos)) : ?>
              <form method="post" action="<?= base_url() ?>index.php/Cadastrar_sair/update/<?= $saidadetentos["id"] ?>"> <!-- Chama a funtion de edição e para o id que será editado -->
              <!--Em Testes | chama o controller responsavel pela edição-->
            <?php else : ?>
              <form method="post" action="<?= base_url() ?>index.php/Cadastrar_sair/update/<?= $saidadetentos["id"] ?>"> <!-- Chama a funtion de edição e para o id que será editado -->
             
              <!--Em Testes | chama o controller responsavel por cadastro-->
            <?php endif; ?>
          <div class="form-group"> <!--Campo Cadeia Publica-->
                <label>Cadeia Publica</label>
                <select class="form-control" style="width: 200px" name="cadeiapublica" value=" <?= isset($saidadetentos) ? $saidadetentos["cadeiapublica"] : "" ?>"><!-- 'name=' adicionado-->
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
            </div>
      
            <div class="form-group">
              <label>Data de Saida</label>
              <input type="text" class="form-control" name="datasaida" placeholder="dd/mm/aaaa" style="width:140px" maxlength="10" value=" <?= isset($saidadetentos) ? $saidadetentos["datasaida"] : "" ?>"  ><!-- 'name=' adicionado-->
              </div>

            <div class="form-group"> <!-- Nome do Detento-->
              <label>Nome</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome" style="width:300px" value=" <?= isset($saidadetentos) ? $saidadetentos["nome"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome da Mãe-->
              <label>Nome da Mãe</label>
              <input type="text" class="form-control" name="mae" placeholder="Nome da Mãe" style="width:300px"   value=" <?= isset($saidadetentos) ? $saidadetentos["mae"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome do Pai-->
              <label>Nome do Pai</label>
              <input type="text" class="form-control" name="pai" placeholder="Nome" style="width:300px"   value=" <?= isset($saidadetentos) ? $saidadetentos["pai"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome do Detento-->
              <label>SIAP</label>
              <input type="text" class="form-control" name="numsiap" placeholder="SIAP" style="width:300px"  value=" <?= isset($saidadetentos) ? $saidadetentos["numsiap"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome do Detento-->
              <label>SIC</label>
              <input type="text" class="form-control" name="sic" placeholder="SIC" style="width:300px"  value=" <?= isset($saidadetentos) ? $saidadetentos["sic"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!-- Nome do Detento-->
              <label>PROCESSO</label>
              <input type="text" class="form-control" name="numprocesso" placeholder="PROCESSO" style="width:300px"  value=" <?= isset($saidadetentos) ? $saidadetentos["numprocesso"] : "" ?>"><!-- 'name=' adicionado-->
            </div>

              <div class="form-group"> <!-- Nome do Detento-->
              <label>Destino</label>
              <input type="text" class="form-control" name="destino" placeholder="Destino" style="width:300px" ><!-- 'name=' adicionado-->
            </div>

            <div class="form-group"> <!--Motivo-->
                <label>Motivo</label>
                <select class="form-control" style="width: 250px" name="motivo"  value=" <?= isset($saidadetentos) ? $saidadetentos["motivo"] : "" ?>"><!-- 'name=' adicionado-->
                  <option>ALVARÁ DE SOLTURA</option>
                  <option>EVASÃO</option>
                  <option>FIM DE PRAZO DA PRISÃO CIVIL</option>
                  <option>FIM DE PRAZO DA PRISÃO TEMPORÁRIA</option>
                  <option>FUGA</option>
                  <option>HARMONIZADO</option>
                  <option>ÓBITO</option>
                  <option>PROGRESSÃO DE REGIME</option>
                  <option>LIBERDADE CONDICIONAL</option>
                  <option>PRISÃO DOMICILIAR</option>
                  <option>Transferência P/ CP</option>
                  <option>Transferência P/ UF</option>
                  <option>Transferência P/ UP</option>
                  <option>Trânsito</option>
                  <option>Outros</option>
                </select>
            </div>

            <div class="form-group"> <!--Origem-->
              <label>Origem</label><!-- Origem alterada para ficar de acordo com documentação, versão antiga estava com os options errados-->
                <select class="form-control" style="width: 250px" name="origem"  value=" <?= isset($saidadetentos) ? $saidadetentos["origem"] : "" ?>"><!-- 'name=' adicionado-->
                  <option>CP de Altinho</option>
                  <option>CP de Bom Conselho</option> 
                  <option>CP de Carpina</option>
                  <option>CP de Glória do Goitá</option>
                  <option>CP de Lagoa do Carro</option>
                  <option>Delegacia - PC</option>
                  <option>Outra UF</option>
                  <option>Polícia Militar</option>
                  <option>Outra Origem</option>
                </select>
            </div>

            <div class="form-group"> <!--Documentação-->
                <label>Documentação</label>
                <select class="form-control" style="width: 230px" name="documentacao"  value=" <?= isset($saidadetentos) ? $saidadetentos["documentacao"] : "" ?>"><!-- 'name=' adicionado-->
                  <option>ALVARÁ DE SOLTURA</option>
                  <option>CI - TRANSFERÊNCIA</option>
                  <option>FIM DA PRISÃO TEMPORÁRIA</option>
                  <option>Ofício de Transferência</option>
                  <option>Prisão Temporária</option>
                  <option>Outro</option>
                </select>
            </div>

             <div class="form-group"> <!--Documentação-->
                <label>Condutores</label>
                <select class="form-control" style="width: 230px" name="destino"  ><!-- 'name=' adicionado-->
                  <option>PCPE</option>
                  <option>PF</option>
                  <option>PM</option>
                  <option>PP</option>
                  <option>PP/PM</option>
                  <option>Outro</option>
                </select>
            </div>

            

            <div class="form-group"> <!--Crime de Repercussão-->
                <label>Crime de Repercussão</label>
                <select class="form-control" style="width: 90px" name="crimerepercurssao"  value=" <?= isset($saidadetentos) ? $saidadetentos["crimerepercurssao"] : "" ?>"><!-- 'name=' adicionado-->
                  <option>Sim</option>
                  <option>Não</option>
                </select>
            </div>

            <div class="form-group"> <!--Observações-->
                  <label>Observações Gerais</label>
                  <textarea class="form-control" rows="5" name="obs" placeholder="Observações"  value=" <?= isset($saidadetentos) ? $saidadetentos["obs"] : "" ?>"></textarea><!-- 'name=' adicionado-->
            </div>
             
            <br>

            <?php if(isset($saidadetentos)) :?>

<div class="col-xs-2"> <!--Botão Cadastrar-->
  <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
</div>

<?php else: ?>
<div class="col-xs-2"> <!--Botão Cadastrar-->
  <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
</div>

<?php endif; ?>

<div class="col-xs-2"> <!--Botão Cadastrar-->
<a href="<?php echo site_url('Home/saidaCadeiaPublica'); ?>" class="btn btn-danger btn-block btn-flat">Voltar</a><!--Botão atualizado pq não estav fazendo o 'submit'-->
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
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
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