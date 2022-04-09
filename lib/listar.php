 <?php
    // Globais
    $alunos = ['Bianca', 'Claudia', 'Luiza','Marcos', 'Michele','Pedro', 'Sávio', 'Wisley'];

    // precisam pesquisar como se cria objetos no php usando ARRAY
    // fazer o vetor de alunos como um objeto, no qual vocês vão 
    // colocar nome, idade e sexo nesse objeto
    // e criar um vetor de objeto aluno;

    
    function listaAlunos(){
        return $GLOBALS['alunos'];
    }

    function conectar(){
        $server = '127.0.0.1';
        $username = 'root';
        $password = '';
        $dataBase = 'programadorweb';
        
        $link = mysqli_connect( $server, $username ,$password, $dataBase);

        if (mysqli_connect_errno()) {
            return ['mysqli connection error: ' . mysqli_connect_error()];
        }else {
            return $link;
        }

    }

    function listar_alunos() {
        $link = conectar();
        $result = mysqli_query($link, "SELECT nome, idade, sexo FROM alunos", MYSQLI_USE_RESULT);

        return $result;

        mysqli_close($link);
    }

    var_dump(listar_alunos())

    
 ?>