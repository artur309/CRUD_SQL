<?php
include 'ligacao.php';

		//comando sql para inserir dados
		//? são parametros que serao substituidos por valores quando executada a declaracao

$sql="INSERT INTO alunos (nomeAluno, numAluno, genero, anoAluno, eeAluno) VALUES (?,?,?,?,?)";

		//declaracao recomendada pra executar uma instrucao SQL
$query=$ligacao->prepare($sql);



		//metodo utilizado pra executar a declaracao
$query->execute(array($_POST["nomeAluno"], $_POST["numAluno"], $_POST["genero"], $_POST["anoAluno"], $_POST["eeAluno"]));

?> 

<script language="JavaScript">
	location.href="index.php";
</script>