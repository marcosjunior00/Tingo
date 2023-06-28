<?php 
    // Criando a seção
    session_start();

    // Fazendo a conexão
    include 'conexao.php';

    // Define o nome de usuário e a senha que foram fornecidos pelo usuário
    $email = filter_input(INPUT_GET, 'email');
    $senha = filter_input(INPUT_GET, 'senha');

    // Cria uma consulta SQL para buscar o usuário no banco de dados
    $sql = "SELECT * FROM usuario WHERE email='$email'";

    // Executa a consulta SQL e armazena o resultado em uma variável
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta retornou algum resultado
    if ($result && mysqli_num_rows($result) > 0) {

        // Obtém o registro do usuário da tabela
        $row = mysqli_fetch_assoc($result);

        // Compara a senha fornecida pelo usuário com a senha do usuário no banco de dados
        if ($senha != $row['senha']) {
            echo "<script>alert('senha errada')</script>";
        } 
        else {
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = $row['nome'];
            header('Location: index.php');
        }
    } else {
        echo "<script>alert('email errado')</script>";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
?>