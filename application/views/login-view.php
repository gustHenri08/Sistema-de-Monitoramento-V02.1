<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMT | Login</title>
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

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a><b>Sistema de Monitoramento Prisional</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Faça o login para iniciar sua sessão</p>

            <form action="<?php echo site_url('Login/verifica'); ?>" method="post"><!--Falta correção -->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="login" placeholder="Login">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span><!--Falta correção -->
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span><!--Falta correção -->
                </div>
                <div class="row">
                <div class="col-xs-8">

                </div>

                    <!-- /.col -->
                    <div class="col-xs-4">
                     <button class="btn btn-primary btn-block btn-flat" type="submit">Entrar</button> <!-- alterado para enviar os dados -->
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <br>
            <a href="<?php echo site_url('Cadastro'); ?>" class="text-center">Cadastrar-se</a>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>
