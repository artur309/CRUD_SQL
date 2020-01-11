<?php

include 'ligacao.php';

    $sql = "SELECT * FROM alunos";//comando sql pra fzr consulta

    $query=$ligacao->query($sql);//executa um query pra fazer uma consulta

    //FECTH_ASSOC: retorna um array indexado pelo nome da coluna;
    $resultado=$query->fetchAll(PDO::FETCH_ASSOC);

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

    <script>
        /*Formulario*/
        function openForm() {
            document.getElementById("formulario").style.display = "block";
            document.getElementById("tabela").style.display = "none";
        }

        function closeForm() {
            document.getElementById("formulario").style.display = "none";
        }

        /*Tabela*/
        function openTabela() {
            document.getElementById("tabela").style.display = "block";
            document.getElementById("formulario").style.display = "none";
        }

        function closeTabela() {
            document.getElementById("tabela").style.display = "none";
        }

    </script>

    <!-- Painel de topo -->
    <a href="index.php">
        <div class="topo"> 
            <p>Escola Secundária Professor Tiburcio</p>
        </div>
    </a>

    <!-- Painel Lateral -->
    <div class="sidenav">   
        <br><br><br>
        
        <a  class="open-button" onclick="openForm()">Novo</a>        
        <a  class="open-button" onclick="openTabela()">Listar</a>

    </div>

     <br><br>

     <!-- Painel Registo -->    
   
    <div class="form-popup" id="formulario"> 
      <form method="POST" class="form-container" action="registo.php">

        <h1>Registo</h1>

        Nome: <input type="text" name="nomeAluno" required> <br><br>

        Numero: <input min="1" type="number" name="numAluno" required> <br><br>

        <b>Género:</b>
        Masculino --> <input type="radio" name="genero" value="masculino" required > 
        Feminino  --> <input type="radio" name="genero" value="feminino" required> <br><br>

        Ano:
        <select name="anoAluno"required>
            <option value="10">10º Ano</option>
            <option value="11">11º Ano</option>
            <option value="12">12º Ano</option>
        </select><br><br>

        Enc.Educ: <input type="text" name="eeAluno"required> <br><br>   


        <button type="submit" class="btn">Guardar</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Cancelar</button>
    </form>

</div>

<!--painel listar-->
<div class="verticalScroolBars" id="tabela">

    <div class="tabela-popup"> 

        <button type="button" onclick="closeTabela()">Fechar</button>

        <br><br>

        <table  border=5 align="center" height=10px>
            <tr bgcolor=#c6c60f >
                <th>Id Aluno</th>
                <th>Nome Aluno</th>
                <th>Numero</th>
                <th>Genero</th>
                <th>Ano</th>
                <th>Encarregado Educação</th>
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Imprimir</th>

                <?php

                $num=0;

                foreach($resultado as $alunos)
                {
                    if ($num%2==0) 
                    {
                        echo "<tr bgcolor=#F9FF9A ><td>".$alunos['idAluno']."</td><td>".$alunos['nomeAluno']."</td><td>".$alunos['numAluno']."</td><td>".$alunos['genero']."</td><td>".$alunos['anoAluno']."</td><td>".$alunos['eeAluno']."</td>";

                        echo '<td bgcolor=white><a href="editar.php?idAluno='.$alunos['idAluno'].'"><img align=center height=40 width=40 src=img/lápis.jpg></td>';

                        echo '<td bgcolor="white"><a href="eliminar.php?idAluno='.$alunos['idAluno'].'"><img align=center height=40 width=40 src=img/lixo.png></td>';

                        echo '<td bgcolor="white"><a href="print.php?idAluno='.$alunos['idAluno'].'"><img align=center height=40 width=40 src=img/print.png></td></tr>';
                    }
                    else
                    {
                        echo "<tr bgcolor=#A5FF76 ><td>".$alunos['idAluno']."</td><td>".$alunos['nomeAluno']."</td><td>".$alunos['numAluno']."</td><td>".$alunos['genero']."</td><td>".$alunos['anoAluno']."</td><td>".$alunos['eeAluno']."</td>";

                        echo '<td bgcolor=white><a href="editar.php?idAluno='.$alunos['idAluno'].'"><img align=center height=40 width=40 src=img/lápis.jpg></td>';

                        echo '<td bgcolor="white"><a href="eliminar.php?idAluno='.$alunos['idAluno'].'"><img align=center height=40 width=40 src=img/lixo.png></td>';

                        echo '<td bgcolor="white"><a href="print.php?idAluno='.$alunos['idAluno'].'"><img align=center height=40 width=40 src=img/print.png></td></tr>';

                    }
                    $num++;
                }

                ?>
            </table>   
        </div>
    </div>
    <!-- Painel de Fundo -->
    <a href="gif.php">
        <div class="rodape">
            <p>Página por Artur Quaresma</p>
        </div>
    </a>

</body>
</html>   