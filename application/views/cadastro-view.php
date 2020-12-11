<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMT | Cadastro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"><!-- href= ?php echo base_url(); ? fazendo a chamada do css e do js -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  <a><b>Sistema de Monitoramento Prisional</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrar um novo Agente</p><!--Foi adicionado o 'name='-->

    <form method="post" action="<?php echo site_url('Cadastro/create')?>"><!--Em Testes | chama o controller responsavel por cadastro-->

      <div class="form-group has-feedback">
      <input type="text" required="required" class="form-control" name="nomecompleto" placeholder="Nome Completo"><!--Em Testes --><!--Foi adicionado o 'name='-->
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <input type="int" required="required" class="form-control" name="matricula" maxlength="7" placeholder="Matricula"><!--Em Testes --><!--Foi adicionado o 'name='-->
        <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <input type="text" required="required" class="form-control" name="nucleo" placeholder="Núcleo"><!--Em Testes --><!--Foi adicionado o 'name='-->
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <input type="text" required="required" class="form-control" name="unidadeprisional" placeholder="Unidade Prisional"><!--Em Testes --><!--Foi adicionado o 'name='-->
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <input type="email" required="required" class="form-control" name="emailinstitucional" placeholder="E-mail Institucional"><!--Em Testes --><!--Foi adicionado o 'name='-->
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>





      <div class="row">
        <div class="col-xs-3">

        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar-se</button>
        </div>




        <!-- /.col -->
      </div>
    </form>



    <a href="<?php echo site_url('Login'); ?>" class="text-center"><br>Já sou Cadastrado</a> <!-- href=" ?php echo site_url(); ? => responsável por fazer a chamda do controller -->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
