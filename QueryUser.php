<?php 
$PDO = db_connect();
 $query = $PDO->prepare("SELECT * FROM login WHERE login='$login'");
 $query->execute();
  $row = $query->fetch();
  $MetaPrevista = $row['MetaPrevista'];
  $MetaRealizada = $row['MetaRealizada'];
  $NomeUserLogado = $row['Nome'];
  $PermMontagem = $row['P2Montagem'];
  $PermReteste = $row['P2Reteste'];
  $PermAdm = $row['P2Adm'];
  $Catraca = $row['CadCat'];

?>
