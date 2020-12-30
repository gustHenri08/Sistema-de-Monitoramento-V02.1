<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMP | Cadastro de Agentes</title>
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
        
        $('#unidadeprisional').html("<option>Carregando...</option>");

        var idNucleo = $('#nucleo').val();

        $.post(base_url+'index.php/ajax/CentroPrisional/getCps', {
          idNucleo : idNucleo
        }, function(data){
            $('#unidadeprisional').html(data);
            $('#unidadeprisional').removeAttr('disabled');
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
    <a href="<?php echo site_url('Home'); ?>" class="logo">
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

    <?php if(isset($agentes)) :?>

      <h1>
        Edição de Agentes
      </h1>
        
    <?php else: ?>

      <h1>
        Cadastro de Agentes
      </h1>
            
    <?php endif; ?>
      <ol class="breadcrumb"> <!--Area referente ao Mapa de navegação do site (Precisa de melhorias)mlp-->
        <li><a href="<?php echo site_url('Home/adminHome'); ?>">Home</a></li>
        <li class="active"><a href="<?php echo site_url('Home/agentes'); ?>">Agentes</a></li>
        <?php if(isset($agentes)) :?>

          <li class="active">Edição</a></li>
          
        <?php else: ?>

          <li class="active">Cadastro</a></li>
          
        <?php endif; ?>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <!--Inicio do Box Body-->
        <div class="box-body">
          <!--Inicio do Formulario-->
            <?php if(isset($agentes)) : ?>
              <form method="post" action="<?= base_url() ?>index.php/Cadastro/update/<?= $agentes["id"] ?>"> <!-- Chama a funtion de edição e para o id que será editado -->
              <!--Em Testes | chama o controller responsavel pela edição-->
            <?php else : ?>
              <form method="post" action="<?php echo site_url('Cadastro/createMaster') ?>">
              <!--Em Testes | chama o controller responsavel por cadastro-->
            <?php endif; ?>

            <h5>(*) Campo Obrigatório</h5>
         
            <div class="form-group">
          		<label>Nome Completo *</label>
          		<input type="text" required="required" class="form-control" name="nomecompleto" placeholder="Nome Completo" value="<?= isset($agentes) ? $agentes["nomecompleto"] : "" ?>" style="width:300px"><!-- 'name=' adicionado-->
          	</div>

            <div class="form-group">
          		<label>Matrícula *</label>
          		<input type="int" required="required" class="form-control" name="matricula" maxlength="7" placeholder="Matricula" value="<?= isset($agentes) ? $agentes["matricula"] : "" ?>" style="width:150px"><!-- 'name=' adicionado-->
          	</div>
            
            <div class="form-group">
                <label for="nucleos">Núcleos *</label>
                <?php if(isset($agentes)) :?>
                  <select class="form-control" id="nucleo" name="nucleo" style="width: 155px">
                  <option><?=$agentes["nucleo"]?></option>
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
                <?php if(isset($agentes)) :?>
                  <select class="form-control" id="unidadeprisional" name="unidadeprisional" style="width: 250px">
                    <option><?=$agentes["unidadeprisional"]?></option>
                    <option>Selecione o Núcleo Acima</option>
                  </select>
                <?php else: ?>
                  <select class="form-control" id="unidadeprisional" name="unidadeprisional" style="width: 250px"  disabled>
                    <option>Selecione o Núcleo Acima</option>
                  </select>
                <?php endif; ?>
            </div>

            <div class="form-group"> <!--Campo função-->
                <label>Função *</label>
                <?php if(isset($agentes)) :?>
                  <select class="form-control" style="width: 200px" name="funcao">
                    <option><?=$agentes["funcao"]?></option>
                    <option>Agente</option>
                    <option>Administrador</option>                    
          		  	</select>
                <?php else: ?>
                  <select class="form-control" style="width: 200px" name="funcao">
                    <option>Agente</option>
                    <option>Administrador</option>                    
          		  	</select>
                <?php endif; ?>
          			
          	</div>

            <div class="form-group"> <!--Campo Cadeia Publica-->
                <label>Funcionario Ativo *</label>
                <?php if(isset($agentes)) :?>
                <select class="form-control" style="width: 200px" name="funcionarioativo">
                  <option><?=$agentes["funcionarioativo"]?></option>
                  <option>Inativo</option>  
                  <option>Ativo</option>          				
                </select>
                <?php else: ?>
                  <select class="form-control" style="width: 200px" name="funcionarioativo">
                  <option>Inativo</option>  
                  <option>Ativo</option>          				
                </select>
                <?php endif; ?>

          	</div>


          	<div class="form-group"> <!-- Nome do Pai-->
          		<label>E-mail Institucional *</label>
          		<input type="email" required="required" class="form-control" name="emailinstitucional" placeholder="E-mail Institucional" value="<?= isset($agentes) ? $agentes["emailinstitucional"] : "" ?>" style="width:300px"><!-- 'name=' adicionado-->
          	</div>

            <div class="form-group"> <!--Data de Prisão-->
          		<label>Login</label>
          		<input type="text" class="form-control" name="login" placeholder="Login" value="<?= isset($agentes) ? $agentes["login"] : "" ?>" style="width:300px" maxlength="16"><!-- 'name=' adicionado-->
          	</div>

            <div class="form-group"> <!--Observações-->
                  <label>Senha</label>
                  <input type="text" class="form-control" name="senha" placeholder="Senha" value="<?= isset($agentes) ? $agentes["senha"] : "" ?>" style="width:300px" maxlength="16"><!-- 'name=' adicionado-->
            </div>

            <br>

            <?php if(isset($agentes)) :?>

              <div class="col-xs-2"> <!--Botão Cadastrar-->
                <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="editar();">Salvar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
              </div>

            <?php else: ?>
              <div class="col-xs-2"> <!--Botão Cadastrar-->
                <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="cadastrar();">Cadastrar</button><!--Botão atualizado pq não estav fazendo o 'submit'-->
              </div>

            <?php endif; ?>

            <div class="col-xs-2"> <!--Botão Cadastrar-->
            <a href="<?php echo site_url('Home/agentes'); ?>" class="btn btn-danger btn-block btn-flat">Cancelar</a><!--Botão atualizado pq não estav fazendo o 'submit'-->
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
<!-- Ajax -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
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
