<?php
require("../restritos.php"); 
require_once '../init.php';
$cHome = "active";
$PDO = db_connect();
require_once '../QueryUser.php';
require_once '../QueryDash.php';
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title><?php echo $titulo; ?></title>
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
 <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
 <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
</head>
<body class="hold-transition skin-blue-light fixed sidebar-mini">
<div class="wrapper">
 <header class="main-header">
  <a href="#" class="logo">
   <span class="logo-mini"><img src="../dist/img/logo/logoWhite.png" width="50"/></span>
   <span class="logo-lg"><img src="../dist/img/logo/logoWhite.png" width="180" /></span>
  </a>
  <nav class="navbar navbar-static-top">
   <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Minizar Navegação</span>
   </a>
   <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
     <li class="dropdown user user-menu">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
       <span class="hidden-xs"><?php echo $NomeUserLogado; ?></span>
      </a>
      <ul class="dropdown-menu">
       <li class="user-header">
        <p><?php echo $NomeUserLogado; ?></p>
       </li>
       <li class="user-footer">
        <div class="pull-left">
         <a href="user/perfil.php" class="btn btn-info">Dados de Perfil</a>
        </div>
        <div class="pull-right">
         <a href="../logout.php" class="btn btn-danger">Sair</a>
        </div>
       </li>
      </ul>
     </li>
     <li>
       <a href="../logout.php" class="btn btn-danger btn-flat">Sair</a>
     </li>
    </ul>
    </div>
    </nav>
  </header>
  <aside class="main-sidebar">
   <section class="sidebar">
    <?php include_once '../menuLateral.php'; ?>
    </section>
  </aside>
<div class="content-wrapper">
 <section class="content-header">
  <h1>Montagem de Equipamentos<small><?php echo $titulo; ?></small></h1>
 </section>
 <section class="content">
  <div class="row">
    <?php
    if ($PermMontagem == '9') {
     ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoPrismaSF">
           <span class="info-box-icon">
            <img src="../dist/img/relogios/Prisma_SF/PrismaSF.png" align="center" width="130" />
           </span>
          </a>
          <div class="info-box-content"><br /><h4>Prisma SF</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoHexa">
           <span class="info-box-icon">
            <img src="../dist/img/relogios/hexa/a.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Hexa</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoPrisma">
           <span class="info-box-icon">
            <img src="../dist/img/relogios/Prisma/Prisma.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Prisma</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoCompacto">
           <span class="info-box-icon">
            <img src="../dist/img/relogios/Compacto/sis.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Compacto S</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoOrionVI">
           <span class="info-box-icon">
           <img src="../dist/img/relogios/Orion_6/Orion6.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Orion 6</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoOnix">
           <span class="info-box-icon bg-red">
           <img src="../dist/img/relogios/Velti/onix.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Velti Ônix</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoVeltiPonto">
           <span class="info-box-icon bg-red">
           <img src="../dist/img/relogios/Velti/velti.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Velti Ponto</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoPrimmeAcesso">
           <span class="info-box-icon">
           <img src="../dist/img/relogios/Primme.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Primme Acesso</h4>(8X / SF)</div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a href="javascript::;" class="product-title"><span class="info-box-icon bg-red" onclick="window.open('Cad/09/Velti373_E1.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=800, HEIGHT=750');">
           <img src="../dist/img/relogios/Velti/velti.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Velti 373</h4>(Sem Impressora)</div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoSINDNOX">
           <span class="info-box-icon bg-purple">
           <img src="../dist/img/relogios/dixi/sindnox.png" align="center" width="100" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Dixi Sindnox</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoPrimmePonto">
           <span class="info-box-icon">
           <img src="../dist/img/relogios/Primme.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Primme Ponto</h4>(8X / SF)</div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a href="javascript::;" class="product-title"><span class="info-box-icon" onclick="window.open('Cad/12/argos.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=800, HEIGHT=650');">
           <img src="../dist/img/relogios/argos.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Argos</div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a data-toggle="modal" data-target="#NovoIDNOX">
           <span class="info-box-icon bg-purple">
           <img src="../dist/img/relogios/dixi/idnox.png" align="center" width="100" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Dixi Idnox</h4></div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a href="javascript::;" class="product-title"><span class="info-box-icon bg-orange" onclick="window.open('Cad/Outros/7x.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=800, HEIGHT=650');">
           <img src="../dist/img/relogios/orion-cr.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Linha 7X</h4>(Card/Orion)</div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a href="javascript::;" class="product-title"><span class="info-box-icon bg-orange" onclick="window.open('Cad/Outros/Cartografico.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=800, HEIGHT=650');">
           <img src="../dist/img/relogios/plus.png" align="center" width="130" /></span>
          </a>
          <div class="info-box-content"><br /><h4>Cartográficos</h4>(PROT/PLUS)</div>
         </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
          <a href="javascript::;" class="product-title"><span class="info-box-icon bg-black" onclick="window.open('Cad/Outros/Acessorios.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=800, HEIGHT=650');">
           </span>
          </a>
          <div class="info-box-content"><br /><h4>Acessorios</h4></div>
         </div>
        </div>
        
        <?php
          //CHAMANDO OS MODALS DA PAGINA
          include 'modal/Prisma.php';
          include 'modal/PrismaSF.php';
          include 'modal/montagemHexaModal.php';
          include 'modal/montagemOrionVIModal.php';
          include 'modal/montagemVeltiPontoModal.php';
          include 'modal/montagemIDNOXModal.php';
          include 'modal/montagemSINDNOXModal.php';
          include 'modal/montagemOrionAcesso.php';
          include 'modal/montagemCard.php';
          include 'modal/montagemPrimmePonto.php';
          include 'modal/montagemPrimmeAcesso.php';
          include 'modal/montagemCompactoModal.php';
          include 'modal/montagemVeltiOnix.php';
    }
    else
    {
      echo '<div class="col-xs-12">';
      echo '<div class="box box-widget widget-user">';
      echo '<div class="info-box">';
      echo '<a href="../dashboard.php"><span class="info-box-icon bg-orange">';
      echo '<i class="fa fa-exclamation-triangle"></i></span></a>';
      echo '<div class="info-box-content"><h4>VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESTA PÁGINA<br />';
      echo 'CLIQUE NO BOTÃO PARA VOLTAR PARA A PÁGINA INICIAL</h4></div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    ?>




 </div>
 </section>
</div><!-- CONTENT-WRAPPER -->
<?php include_once 'footer.php'; ?>

</div>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>
