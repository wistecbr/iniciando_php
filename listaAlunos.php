<?php
   include './lib/listar.php';
   $alunos = listaAlunos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>
<body>
    <header>
        <a href="/">HOME</a>
        <a href="/listaAlunos.php">Alunos</a>
    </header>
    <main>
        <ul>
            <?php
                for($i = 0; $i < count($alunos); $i++){
                    echo '<li>' . $alunos[$i] . '</li>';
                }
            ?>
        </ul>
    </main>
</body>
</html>