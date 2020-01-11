
<?php
include 'ligacao.php';


if (empty($_GET['idAluno']))
	$idAluno="";	
else
	$idAluno=$_GET['idAluno'];
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

<body>

	
	<!-- Painel de topo -->
	<a href="index.php">
		<div class="topo"> 
			<p>Escola Secundária Professor Tiburcio</p>
		</div>
	</a>

	<!-- Painel Lateral -->
	<div class="sidenav">
		<br><br><br>
		<a  class="open-button" href="index.php">Voltar</a>
	</div>


	<br><br><br><br>
	<div class="editarAluno" id="formulario"> 


		<form  method="post" action="eliminar2.php">
			<br>

			<h1>Quer Apagar o aluno número <?php echo "".$idAluno; ?> </h1>

			<br>

			<input type="hidden" name="idAluno" <?php echo 'value='.$idAluno ?>>


			<button type="submit" name="yes" value="1" onclick="submit;">
				<b>Sim</b>
			</button>

			&nbsp;&nbsp;&nbsp;
			
			<button type="button" name="yes" value="0" onclick="location.href='index.php';">
				<b>Não</b>
			</button>

		</form>
	</div>

	<!-- Painel de Fundo -->
	<a href="gif.php">
		<div class="rodape">
			<p>Página por Artur Quaresma</p>
		</div>
	</a>
</body></html>