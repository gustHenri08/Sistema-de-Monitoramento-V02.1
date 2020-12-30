<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMP | Cadastro de Detentos</title>
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
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <!-- Responsável por carregar os Nucleos e as Cidades via ajax -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">

    $(function(){

      var base_url = "<?php echo base_url()?>";

      $('#nucleo').change(function(){
        
        $('#cadeiapublica').html("<option>Carregando...</option>");

        var idNucleo = $('#nucleo').val();

        $.post(base_url+'index.php/ajax/CentroPrisional/getCps', {
          idNucleo : idNucleo
        }, function(data){
            $('#cadeiapublica').html(data);
            $('#cadeiapublica').removeAttr('disabled');
        });
      });
    });

  </script>

  <!-- Fim do script de carregamento -->
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
      <?php if(isset($detentos)) :?>

        <h1>
          Edição de Detentos
        </h1>

      <?php else: ?>

        <h1>
          Cadastro de Detentos
        </h1>
          
      <?php endif; ?>
      <ol class="breadcrumb"> <!--Area referente ao Mapa de navegação do site (Precisa de melhorias)-->
        <li><a href="<?php echo site_url('Home/adminHome'); ?>">Home</a></li>
        <li class="active"><a href="<?php echo site_url('Home/entradaPresosAdmin'); ?>">Entrada de Detentos</a></li>
        <?php if(isset($detentos)) :?>

          <li class="active">Edição de Detentos</a></li>

        <?php else: ?>

          <li class="active">Cadastro de Detentos</a></li>

        <?php endif; ?>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <?php if(isset($detentos)) :?>
            <h3 class="box-title">Edição</h3>
          <?php else: ?>
            <h3 class="box-title">Cadastro</h3>
          <?php endif;?>
          
          <h5>(*) Campo Obrigatório</h5>

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
          <?php if(isset($detentos)) : ?>
            <form method="post" action="<?= base_url() ?>index.php/CadastroPresos/updatepresosAdmin/<?= $detentos["id"] ?>"> <!-- Chama a funtion de edição e para o id que será editado -->
            <!--Em Testes | chama o controller responsavel pela edição-->
          <?php else : ?>
            <form method="post" action="<?php echo site_url('CadastroPresos/createAdmin') ?>">
            <!--Em Testes | chama o controller responsavel por cadastro-->
          <?php endif; ?>

          <?php if(isset($detentos)) : ?>
            <div class="form-group"> <!-- Nome do Detento-->
                <label>Policial Penal</label>
                <input type="text" class="form-control" name="cadastrante" placeholder="Agente Penitenciário" value="<?= isset($agentes) ? ($this->session->userdata("nomecompleto")) : ($this->session->userdata("nomecompleto"))?>"  readonly style="width:300px"><!-- 'name=' adicionado-->
              </div>
              
              <div class="form-group"> <!-- Nome do Detento-->
                <label>Função</label>
                <input type="text" class="form-control" name="funcaocadastrante" placeholder="Função Agente" value="<?= isset($agentes) ? ($this->session->userdata("funcao")) : ($this->session->userdata("funcao"))?>"  readonly style="width:300px"><!-- 'name=' adicionado-->
              </div>
              
              <div class="form-group"> <!-- Nome do Detento-->
                <label>Matrícula</label>
                <input type="text" class="form-control" name="matriculacadastrante" placeholder="Matricula Agente" value="<?= isset($agentes) ? ($this->session->userdata("matricula")) : ($this->session->userdata("matricula"))?>"  readonly style="width:300px"><!-- 'name=' adicionado-->
              </div>
            <?php endif; ?>            

          	<div class="form-group"> <!-- Nome do Detento-->
          		<label>Nome Detento *</label>
          		<input type="text" class="form-control" required name="nome" placeholder="Nome" value="<?= isset($detentos) ? $detentos["nome"] : ""?>" style="width:300px"><!-- 'name=' adicionado-->
            </div>
            
          	<div class="form-group">
              <label for="nucleos">Núcleo *</label>
              <?php if(isset($detentos)): ?>
                <select class="form-control" id="nucleo" name="nucleo" style="width: 155px">
                  <option><?=$detentos["nucleo"]?></option>
                  <?php echo $option_nucleo; ?>
                </select>
              <?php else: ?>
                <select class="form-control" id="nucleo" name="nucleo" style="width: 155px">
                  <?php echo $option_nucleo; ?>
                </select>
              <?php endif; ?>
            </div>

            <div class="form-group">
               <label for="nucleos">Centro Prisional *</label>
               <?php if(isset($detentos)): ?>
                <select class="form-control" id="cadeiapublica" name="cadeiapublica" style="width: 250px">
                  <option><?=$detentos["cadeiapublica"]?></option>
                  <option>Selecione o Núcleo Acima</option>
                </select>
              <?php else: ?>
                <select class="form-control" id="cadeiapublica" name="cadeiapublica" style="width: 250px"  disabled>
                  <option>Selecione o Núcleo Acima</option>
                </select>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label>Data de Entrada *</label>
              <input type="date" class="form-control" required name="dataentrada" placeholder="dd/mm/aaaa" value="<?= isset($detentos) ? $detentos["dataentrada"] : ""?>" style="width:140px" maxlength="10" ><!-- 'name=' adicionado-->
            </div>
            
            <div class="form-group"> <!--Crime de Repercussão-->
                <label>Sexo *</label>
                <?php if(isset($detentos)) :?>
                  <select class="form-control" style="width: 110px" name="sexo"><!-- 'name=' adicionado-->
                    <option><?= $detentos["sexo"]?></option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                  </select>
                <?php else :?>
                  <select class="form-control" style="width: 110px" name="sexo"><!-- 'name=' adicionado-->                    
                    <option>Masculino</option>
                    <option>Feminino</option>
                  </select>
                <?php endif;?>
            </div>

          	<div class="form-group"> <!-- Nome da Mãe-->
          		<label>Nome da Mãe *</label>
          		<input type="text" class="form-control" required name="nomemae" placeholder="Nome da Mãe" value="<?= isset($detentos) ? $detentos["nomemae"] : "" ?>" style="width:300px"><!-- 'name=' adicionado-->
          	</div>

          	<div class="form-group"> <!-- Nome do Pai-->
          		<label>Nome do Pai </label>
          		<input type="text" class="form-control"  name="nomepai" placeholder="Nome do Pai" value="<?= isset($detentos) ? $detentos["nomepai"] : "" ?>" style="width:300px"><!-- 'name=' adicionado-->
          	</div>

            <div class="form-group"> <!--Motivo-->
                <label>Motivo *</label>
                <?php if(isset($detentos)): ?>
                  <select class="form-control" style="width: 250px" name="motivo"><!-- 'name=' adicionado-->
                    <option><?=$detentos["motivo"]?></option>
                    <option>Expiração de Prazo</option>
                    <option>Mandado de Prisão Civil</option>
                    <option>Mandado de Prisão Preventiva</option>
                    <option>Mandado de Prisão Temporária</option>
                    <option>Mandado de Recolhimento</option>
                    <option>Recaptura - Mandado de Prisão</option>
                    <option>Transferência</option>
                    <option>Trânsito</option>
                    <option>Outros</option>
                  </select>
                <?php else :?>
                  <select class="form-control" style="width: 250px" name="motivo"><!-- 'name=' adicionado-->
                  <option>Expiração de Prazo</option>
                  <option>Mandado de Prisão Civil</option>
                  <option>Mandado de Prisão Preventiva</option>
                  <option>Mandado de Prisão Temporária</option>
                  <option>Mandado de Recolhimento</option>
                  <option>Recaptura - Mandado de Prisão</option>
                  <option>Transferência</option>
                  <option>Trânsito</option>
                  <option>Outros</option>
                  </select>
                <?php endif;?>
            </div>

            <div class="form-group"> <!--Origem-->
              <label>Origem *</label><!-- Origem alterada para ficar de acordo com documentação, versão antiga estava com os options errados-->
              <?php if(isset($detentos)): ?>
                <select class="form-control" style="width: 250px" name="origem"><!-- 'name=' adicionado-->
                  <option><?= $detentos["origem"]?></option>
                  <option>CP de Afogados da Ingazeira</option>
                  <option>CP de Afrânio</option>
                  <option>CP de Aliança</option>
                  <option>CP de Agrestina</option>
                  <option>CP de Altinho</option>
                  <option>CP de Araripina</option>
                  <option>CP de Belém do São Francisco</option>
                  <option>CP de Bezerros</option>
                  <option>CP de Bom Conselho</option>
                  <option>CP de Cabrobó</option>
                  <option>CP de Cachoeirinha</option>
                  <option>CP de Camocim de São Félix</option>
                  <option>CP de Capoeiras</option>
                  <option>CP de Carnaíba</option>
                  <option>CP de Carpina</option>
                  <option>CP de Custódia</option>
                  <option>CP de Escada</option>
                  <option>CP de Exu</option>
                  <option>CP de Flores</option>
                  <option>CP de Gameleira</option>
                  <option>CP de Garanhuns</option>
                  <option>CP de Glória do Goitá</option>
                  <option>CP de Goiana</option>
                  <option>CP de Gravatá</option>
                  <option>CP de Ibimirim</option>
                  <option>CP de Ipubi</option>
                  <option>CP de Itambé</option>
                  <option>CP de Itapetim</option>
                  <option>CP de Jataúba</option>
                  <option>CP de João Alfredo</option>
                  <option>CP de Lagoa do Carro</option>
                  <option>CP de Lajedo</option>
                  <option>CP de Macaparana</option>
                  <option>CP de Moreilândia</option>
                  <option>CP de Nazaré da Mata</option>
                  <option>CP de Ouricuri</option>
                  <option>CP de Parnamirim</option>
                  <option>CP de Pedra</option>
                  <option>CP de Petrolândia</option>
                  <option>CP de Petrolina</option>
                  <option>CP de Riacho das Almas</option>
                  <option>CP de Ribeirão</option>
                  <option>CP de Saloá</option>
                  <option>CP de Santa Maria da Boa Vista</option>
                  <option>CP de Santa Maria do Cambucá</option>
                  <option>CP de São Joaquim do Monte</option>
                  <option>CP de São José do Belmonte</option>
                  <option>CP de São José do Egito</option>
                  <option>CP de Serra Talhada</option>
                  <option>CP de Sertânia</option>
                  <option>CP de Tabira</option>
                  <option>CP de Taquaritinga do Norte</option>
                  <option>CP de Timbaúba</option>
                  <option>CP de Trindade</option>
                  <option>CP de Tuparetama</option>
                  <option>CP de Venturosa</option>
                  <option>CP de Verdejante</option>
                  <option>CP de Vicência</option>
                  <option>Audiência de Custódia</option>
                  <option>COTEL</option>
                  <option>CPFAL</option>
                  <option>CPFB</option>
                  <option>CPFR</option>
                  <option>CRA</option>
                  <option>Delegacia - PC</option>
                  <option>Delegacia - PF</option>
                  <option>HCTP</option>
                  <option>Outra UF</option>
                  <option>PABA</option>
                  <option>PAISJ</option>
                  <option>PAMFA</option>
                  <option>PDAD</option>
                  <option>PDEG</option>
                  <option>PDEPG</option>
                  <option>PFDB</option>
                  <option>PI</option>
                  <option>PIT</option>
                  <option>PJALLB</option>
                  <option>PJPS</option>
                  <option>Polícia Militar</option>
                  <option>PPBC</option>
                  <option>PRRL</option>
                  <option>PSAL</option>
                  <option>PSCC</option>
                  <option>PTAC</option>
                  <option>PVSA</option>
                  <option>Outra Origem</option>
                </select>
              <?php else: ?>
                <select class="form-control" style="width: 250px" name="origem"><!-- 'name=' adicionado-->
                  <option>CP de Afogados da Ingazeira</option>
                  <option>CP de Afrânio</option>
                  <option>CP de Aliança</option>
                  <option>CP de Agrestina</option>
                  <option>CP de Altinho</option>
                  <option>CP de Araripina</option>
                  <option>CP de Belém do São Francisco</option>
                  <option>CP de Bezerros</option>
                  <option>CP de Bom Conselho</option>
                  <option>CP de Cabrobó</option>
                  <option>CP de Cachoeirinha</option>
                  <option>CP de Camocim de São Félix</option>
                  <option>CP de Capoeiras</option>
                  <option>CP de Carnaíba</option>
                  <option>CP de Carpina</option>
                  <option>CP de Custódia</option>
                  <option>CP de Escada</option>
                  <option>CP de Exu</option>
                  <option>CP de Flores</option>
                  <option>CP de Gameleira</option>
                  <option>CP de Garanhuns</option>
                  <option>CP de Glória do Goitá</option>
                  <option>CP de Goiana</option>
                  <option>CP de Gravatá</option>
                  <option>CP de Ibimirim</option>
                  <option>CP de Ipubi</option>
                  <option>CP de Itambé</option>
                  <option>CP de Itapetim</option>
                  <option>CP de Jataúba</option>
                  <option>CP de João Alfredo</option>
                  <option>CP de Lagoa do Carro</option>
                  <option>CP de Lajedo</option>
                  <option>CP de Macaparana</option>
                  <option>CP de Moreilândia</option>
                  <option>CP de Nazaré da Mata</option>
                  <option>CP de Ouricuri</option>
                  <option>CP de Parnamirim</option>
                  <option>CP de Pedra</option>
                  <option>CP de Petrolândia</option>
                  <option>CP de Petrolina</option>
                  <option>CP de Riacho das Almas</option>
                  <option>CP de Ribeirão</option>
                  <option>CP de Saloá</option>
                  <option>CP de Santa Maria da Boa Vista</option>
                  <option>CP de Santa Maria do Cambucá</option>
                  <option>CP de São Joaquim do Monte</option>
                  <option>CP de São José do Belmonte</option>
                  <option>CP de São José do Egito</option>
                  <option>CP de Serra Talhada</option>
                  <option>CP de Sertânia</option>
                  <option>CP de Tabira</option>
                  <option>CP de Taquaritinga do Norte</option>
                  <option>CP de Timbaúba</option>
                  <option>CP de Trindade</option>
                  <option>CP de Tuparetama</option>
                  <option>CP de Venturosa</option>
                  <option>CP de Verdejante</option>
                  <option>CP de Vicência</option>
                  <option>Audiência de Custódia</option>
                  <option>COTEL</option>
                  <option>CPFAL</option>
                  <option>CPFB</option>
                  <option>CPFR</option>
                  <option>CRA</option>
                  <option>Delegacia - PC</option>
                  <option>Delegacia - PF</option>
                  <option>HCTP</option>
                  <option>Outra UF</option>
                  <option>PABA</option>
                  <option>PAISJ</option>
                  <option>PAMFA</option>
                  <option>PDAD</option>
                  <option>PDEG</option>
                  <option>PDEPG</option>
                  <option>PFDB</option>
                  <option>PI</option>
                  <option>PIT</option>
                  <option>PJALLB</option>
                  <option>PJPS</option>
                  <option>Polícia Militar</option>
                  <option>PPBC</option>
                  <option>PRRL</option>
                  <option>PSAL</option>
                  <option>PSCC</option>
                  <option>PTAC</option>
                  <option>PVSA</option>
                  <option>Outra Origem</option>
                </select>
              <?php endif;?>
            </div>

            <div class="form-group"> <!--Data de Prisão-->
          		<label>Data da Prisão *</label>
          		<input type="date" class="form-control" required name="dataprisao" value="<?= isset($detentos) ? $detentos["dataprisao"] : "" ?>" style="width:140px" maxlength="10"><!-- 'name=' adicionado-->
            </div>

            <?php if(isset($detentos)): ?>
              <div class="form-group">
                <label>N° SIAP *</label>
                <input type="int" class="form-control" required name="nsiap" placeholder="N° SIAP" readonly value="<?= isset($detentos) ? $detentos["nsiap"] : ""?>" style="width:140px" maxlength="9" ><!-- 'name=' adicionado-->
              </div>
            <?php else: ?>
              <div class="form-group">
                <label>N° SIAP *</label>
                <input type="int" class="form-control" required name="nsiap" placeholder="N° SIAP" value="<?= isset($detentos) ? $detentos["nsiap"] : ""?>" style="width:140px" maxlength="9" ><!-- 'name=' adicionado-->
              </div>
            <?php endif;?>

            <div class="form-group">
              <label>SIC</label>
              <input type="int" class="form-control" name="sic" placeholder="SIC" value="<?= isset($detentos) ? $detentos["sic"] : ""?>" style="width:140px" maxlength="9" ><!-- 'name=' adicionado-->
            </div>
            
            <div class="form-group"> <!--Crime de Repercussão-->
                <label>Regime *</label>
                <?php if(isset($detentos)) :?>
                  <select class="form-control" style="width: 120px" name="regime"><!-- 'name=' adicionado-->
                    <option><?= $detentos["regime"]?></option>                    
                    <option>Fechado</option>                    
                    <option>Semi-Aberto</option>
                    <option>Aberto</option>
                  </select>
                <?php else :?>
                  <select class="form-control" style="width: 120px" name="regime"><!-- 'name=' adicionado-->                    
                    <option>Fechado</option>                    
                    <option>Semi-Aberto</option>
                    <option>Aberto</option>
                  </select>
                <?php endif;?>
            </div>

            <div class="form-group"> <!--Documentação-->
                <label>Documentação *</label>
                <?php if(isset($detentos)): ?>
                  <select class="form-control" style="width: 230px" name="documentacao"><!-- 'name=' adicionado-->
                    <option><?= $detentos["documentacao"]?></option>
                    <option>Auto de Prisão em Flagrante</option>
                    <option>Mandado de Prisão</option>
                    <option>Mandado de Recolhimento</option>
                    <option>Ofício de Transferência</option>
                    <option>Prisão Temporária</option>
                    <option>Outro</option>
                  </select>
                <?php else :?>
                  <select class="form-control" style="width: 230px" name="documentacao"><!-- 'name=' adicionado-->
                    <option>Auto de Prisão em Flagrante</option>
                    <option>Mandado de Prisão</option>
                    <option>Mandado de Recolhimento</option>
                    <option>Ofício de Transferência</option>
                    <option>Prisão Temporária</option>
                    <option>Outro</option>
                  </select>
                <?php endif;?>
            </div>

            <div class="form-group"> <!--Crime de Repercussão-->
                <label>Crime de Repercussão *</label>
                <?php if(isset($detentos)) :?>
                  <select class="form-control" style="width: 90px" name="crimerepercurssao"><!-- 'name=' adicionado-->
                    <option><?= $detentos["crimerepercurssao"]?></option>
                    <option>Sim</option>
                    <option>Não</option>
                  </select>
                <?php else :?>
                  <select class="form-control" style="width: 90px" name="crimerepercurssao"><!-- 'name=' adicionado-->
                    <option>Sim</option>
                    <option>Não</option>
                  </select>
                <?php endif;?>
            </div>

            <div class="form-group"> <!--Observações-->
                  <label>Observações Gerais</label>
                  <textarea class="form-control" rows="5" name="observacoesgerais" placeholder="Observações"> <?= isset($detentos) ? $detentos["observacoesgerais"] : "" ?> </textarea><!-- 'name=' adicionado-->
            </div>

            <br>


            <?php if (isset($detentos)) :?>
              <div class="col-xs-2"> <!--Botão Cadastrar-->
              <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="editar();">Salvar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
              </div>
            <?php else :?>
              <div class="col-xs-2"> <!--Botão Cadastrar-->
              <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="cadastrar();">Cadastrar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
              </div>
            <?php endif;?>

            <div class="col-xs-2"> <!--Botão Cadastrar-->
            <a href="<?php echo site_url('Home/entradaPresosAdmin'); ?>" class="btn btn-danger btn-block btn-flat">Cancelar</a><!--Botão atualizado pq não estav fazendo o 'submit'-->
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

</div> <!--Fim da DIV Wrapper--> 

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
  function cadastrar() {
    alert("Cadastrado com Sucesso!");
  }
  function editar() {
    alert("Editado com Sucesso!");
  }
</script>
</body>
</html>
