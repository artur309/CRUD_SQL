<?php
include 'ligacao.php';


if (empty($_GET['idAluno']))
	$idAluno="";	
else
	$idAluno=$_GET['idAluno'];


$sql='select * from alunos where idAluno='.$idAluno;

$query=$ligacao -> prepare($sql);
$query -> execute();
$resultado = $query -> fetch(PDO::FETCH_ASSOC);

//Nome Aluno
if (empty($resultado['nomeAluno']))
	$nomeAluno="";
else
	$nomeAluno=$resultado['nomeAluno'];

//Numero ALuno
if (empty($resultado['numAluno']))
	$numAluno="";
else
	$numAluno=$resultado['numAluno'];

//Genero Aluno
if (empty($resultado['genero']))
	$genero="";
else
	$genero=$resultado['genero'];

//Ano Escolaridade Aluno
if (empty($resultado['anoAluno'])) 
	$anoAluno="";
else
	$anoAluno=$resultado['anoAluno'];

//Nome EncEduc Aluno
if (empty($resultado['eeAluno'])) 
	$eeAluno="";
else
	$eeAluno=$resultado['eeAluno'];

?>

<!DOCTYPE html>
<html>

<head>

	<link rel="icon" href="img\icon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Registo Alunos | ESPT</title>

	<!--Importacao de css name="#novo" -->
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/registoAluno.css">
	<link rel="stylesheet" type="text/css" href="css/listaAluno.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body onload="window.print()">
	<!-- Painel de topo -->
	<a href="index.php">
		<div class="topo"> 
			<p>Escola Secundária Professor Tiburcio</p>
		</div>
	</a>

	<!-- Painel Lateral -->
	<div class="sidenav">
		<a  class="open-button" href="index.php">Voltar</a>
	</div>

	<!-- Painel Registo -->    
	<br><br>

	<div class="editarAluno" id="formulario"> 

		<form method="POST" class="form-container">


			<h1>Registo</h1>

			<b>Id Aluno:</b> &nbsp; <?php echo $idAluno; ?> <br><br>

			<b>Nome:</b> &nbsp;<?php echo $nomeAluno; ?> <br><br>

			<b>Numero:</b> &nbsp; <?php echo $numAluno; ?> <br><br>

			<b>Género: &nbsp;</b> <?php echo $genero; ?> <br><br>

			<b>Ano:</b> &nbsp;<?php echo $anoAluno ?> <br><br>

			<b>Enc.Educ:</b>&nbsp; <?php echo $eeAluno ?> <br><br>   

		</form>
	</div>

	<!-- Painel de Fundo -->
	<a href="gif.php">
		<div class="rodape">
			<p>Página por Artur Quaresma</p>
		</div>
	</a>

</body>

</html>