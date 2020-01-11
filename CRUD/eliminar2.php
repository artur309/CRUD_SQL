
<?php

include 'ligacao.php';

$apagar='DELETE from alunos WHERE idAluno=:idAluno';
$query=$ligacao->prepare($apagar);
$query->bindParam(':idAluno',$_POST['idAluno']);

	echo $_POST['idAluno'];

if (!empty($_POST['yes'])) {
	$query->execute();
}

include 'index.php';
?>

<script language="JavaScript">
	location.href="index.php";
</script>