<?php
require("../restritos.php"); 
require_once '../init.php';
$NumeroREP = $_GET['ID']; 
$PDO = db_connect();
require_once '../QueryUser.php';
include_once '1510Valida.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LiberaREP - Henry Equipamentos e Sistemas</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue layout-top-nav">
 <div class="wrapper">
  <header class="main-header">
   <nav class="navbar navbar-static-top">
    <div class="container">
     <div class="navbar-header">
      <span class="logo-lg"><img src="../dist/img/logo/henry-logo-branco.png" width="200"></span>
     </div>
     <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
       <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="hidden-xs">Olá, <?php echo $NomeUserLogado; ?></span></a>
       </li>
      </ul>
     </div>
    </div>
   </nav>
  </header>
  <div class="content-wrapper">
   <div class="container">
    <section class="content">
     <div class="box box-default">
     <div class="box-header with-border">
      <h2 class="box-title"><strong> NÚMERO DE SÉRIE: </strong><?php echo $NumeroREP; ?></h2>
     </div>
     <div class="box-body">
      <div class="col-xs-6">
       <li class="list-group-item">
        <b>Modelo:</b> 
        <a class="pull-right"><code><?php echo $Modelo; ?></code></i></a>
       </li>
       <li class="list-group-item">
        <b>Montagem:</b> 
        <a class="pull-right"><code><?php echo $DataMontagem; ?></code></strong></i></a>
       </li>
       <li class="list-group-item">
        <b>Reprovado:</b>
        <a class="pull-right"><code><?php echo $Reprovado; ?> </code></a>
       </li>
      </div>
      <div class="col-xs-6">
       <li class="list-group-item">
        <b>Resp. Teste:</b> 
        <a class="pull-right"><code><?php echo $RespTeste; ?></code></i></a>
       </li>
       <li class="list-group-item">
        <b>Resp. Reteste:</b> 
        <a class="pull-right"><code><?php echo $RespReteste; ?></code></i></a>
       </li>
       <li class="list-group-item">
        <b>Data Liberado:</b>
        <a class="pull-right"><code><?php echo $DataLiberado; ?> </code></strong></a>
       </li>
       </div>
      <div class="col-xs-8">
       <li class="list-group-item">
        <b>PROX RFID:</b> 
        <a class="pull-right">
         <code><?php echo $Proximidade; ?></code></a>
       </li>
       <li class="list-group-item">
        <b>Biometria:</b>
        <a class="pull-right"><code><?php echo $Biometria; ?> </code></a>
       </li>
      </div>
      <div class="col-xs-4">
       <li class="list-group-item">
        <b>SMART CARD:</b> 
        <a class="pull-right">
         <code><?php echo $SmartCard; ?></code></a>
       </li>
       <li class="list-group-item">
        <b>Barras:</b>
        <a class="pull-right"><code><?php echo $Barras; ?> </code></a>
       </li>
      </div>
     <div class="col-xs-12"> 
      <h4>HISTÓRICO DO EQUIPAMENTO</h4>
     </div>
      <div class="col-xs-12">
       <li class="list-group-item">
        <i class="texto">
        <?php echo $Descricao; ?>
        </i>
       </li>
      </div>
      <form name="D1510" id="name" method="post" action="" enctype="multipart/form-data">
       <div class="col-xs-12">Observações
        <textarea name="descricao" cols="45" rows="3" class="form-control" id="descricao"></textarea>
       </div>
       <div class="col-xs-12"><br />
        <input name="D1510" type="submit" class="btn btn-danger btn-lg btn-block" id="D1510" value="DEVOLVER EQUIPAMENTO"  />
       </div>
      </form>
       <?php 
        if(@$_POST["D1510"])
        {
         $DataHoje = date('Y-m-d H:i:s');
         $DataBrasil = date('d/m/Y H:i:s');
          $Obser = str_replace("\r\n", "<br/>", strip_tags($_POST["descricao"]));
         $At = "<br /><strong>Nova Atualização</strong>";
         $Us = "<br /><strong>Usuário: </strong>" . $NomeUserLogado;
         $Dt = "<br /><strong>Data: </strong>" . $DataBrasil;
         $Ob = "<br /><strong>Observação: </strong><br />" . $Obser;
         $Atual = $Descricao . $At . $Us . $Dt . $Ob;
         $executa = $PDO->query("UPDATE cadastro_1510 SET Status='1', UserReteste='$NomeUserLogado', DataRetorna='$DataHoje', Observa='$Atual' WHERE NumREP='$NumeroREP' ");
         if($executa)
         {
         echo '<script type="text/javascript">alert("Devolvido Com Sucesso!");</script>';
         echo '<script type="text/javascript">window.close();</script>';
         }
         else
         {
         echo '<script type="text/javascript">alert("NÃO FOI POSSÍVEL DEVOLVER EQUIPAMENTO");</script>';
         echo '<script type="text/javascript">window.close();</script>';
         }
        }
       ?>
     </div>
    </section>
  </div>
 </div><?php include_once '../footer.php'; ?></div>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../dist/js/app.min.js"></script>
</body>
</html>
