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

<body>
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

		<form method="POST" class="form-container" action="editar2.php">

			<input type="hidden" name="idAluno" <?php echo 'value='.$idAluno ?>>

			<h1>Registo</h1>

			Nome: <input type="text" name="nomeAluno" <?php echo 'value='.$nomeAluno ?>> <br><br>

			Numero: <input min="1" type="number" name="numAluno" <?php echo 'value='.$numAluno ?>>

			<br><br>

			<b>Género:</b>
			<?php

			if ($genero=="masculino") {
				echo ' Masculino --> <input type="radio" name="genero" value="masculino"  checked="checked"  > ';
				echo ' Feminino --> <input type="radio" name="genero" value="feminino"> ';
			}
			elseif ($genero=="feminino") {
				echo ' masculino --> <input type="radio" name="genero" value="masculino"> ';
				echo ' Feminino --> <input type="radio" name="genero" value="feminino"  checked="checked"  > ';
			}

			?>
			<br><br>



			Ano:
			<select name="anoAluno">
				<?php  

				if ($anoAluno=="10") {
					echo '<option selected="selected" value="10">10º Ano</option>';
					echo '<option value="11">11º Ano</option>';
					echo '<option value="12">12º Ano</option>';
					
				}
				elseif ($anoAluno=="11") {
					echo '<option value="10">10º Ano</option> ';
					echo '<option selected="selected" value="11">11º Ano</option>';
					echo '<option value="12">12º Ano</option>';

				}
				elseif ($anoAluno=="12") {
					echo '<option value="10">10º Ano</option> ';
					echo '<option value="11">11º Ano</option>';
					echo '<option selected="selected" value="12">12º Ano</option>';
				}
				?>
			</select>

			<br><br>

			Enc.Educ: <input type="text" name="eeAluno" <?php echo 'value='.$eeAluno ?>> <br><br>   


			<button type="submit" class="btn">Guardar</button>

			<button type="button" class="btn cancel" onclick="location.href='index.php';">
				Cancelar
			</button>
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