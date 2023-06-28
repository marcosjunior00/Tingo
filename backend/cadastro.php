<?php 

    // Iniciando a seção
    session_start();

    // Fazendo a conexão
    include 'conexao.php';

    // Declarando as variáveis para inserção no Banco de Dados
    $firstName = filter_input(INPUT_GET, 'nome');
    $lastName = filter_input(INPUT_GET, 'lastName');
    $email = filter_input(INPUT_GET, 'email');
    $senha = filter_input(INPUT_GET, 'senha');
    $cpf = filter_input(INPUT_GET, 'cpf');
    $dtNasc = filter_input(INPUT_GET, 'dtNasc');
    $genero = filter_input(INPUT_GET, 'genero');

    $nome = $firstName . " " . $lastName;

    // Cria a pesquisa para a verificação da existência do email no banco
    $search = "SELECT * FROM usuario WHERE email = '$email'";

    // Executando a pesquisa
    $execute = mysqli_query($conn, $search);

    // Verificando se o usuário já existe
    if (@mysqli_num_rows($execute) > 0) {

        echo "<script>alert('Este email já está cadastrado');</script>";
    
    } else {

        // Faz a inserção no banco de dados
        $insert = "INSERT INTO usuario 
                    (nome, cpf, email, senha, data_nasc, genero) 
                    VALUES 
                    ('$nome','$cpf', '$email', '$senha', '$dtNasc', '$genero')";

        $ExecInsert = mysqli_query($conn, $insert);

        echo "<script>alert('Dados gravados com sucesso!');</script>";

    }

    // Fechando a conexão com o Banco de Dados
    mysqli_close($conn);

?>