<?php

require_once 'ligacao.php';

if (empty($_POST['idAluno']))
  $idAluno="";  
else
  $idAluno=$_POST['idAluno'];

//Nome Aluno
if (empty($_POST['nomeAluno']))
  $nomeAluno="";
else
  $nomeAluno=$_POST['nomeAluno'];

//Numero ALuno
if (empty($_POST['numAluno']))
  $numAluno="";
else
  $numAluno=$_POST['numAluno'];

//Genero Aluno
if (empty($_POST['genero']))
  $genero="";
else
  $genero=$_POST['genero'];

//Ano Escolaridade Aluno
if (empty($_POST['anoAluno'])) 
  $anoAluno="";
else
  $anoAluno=$_POST['anoAluno'];

//Nome EncEduc Aluno
if (empty($_POST['eeAluno'])) 
  $eeAluno="";
else
  $eeAluno=$_POST['eeAluno'];


$sql="update alunos set nomeAluno='".$nomeAluno."',numAluno='".$numAluno."',genero='".$genero."',anoAluno='".$anoAluno."',eeAluno='".$eeAluno."' where idAluno=$idAluno";

$query = $ligacao -> prepare($sql);
$query->execute();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <?php


  if (!empty($query))
   echo '<h3><br>Dados Inseridos com sucesso</h3>';

 

 else
   echo '<h3><br>Dados Inseridos sem sucesso</h3>';

 ?>
 <script language="JavaScript">
    location.href="index.php";
 </script>

</body>
</html>