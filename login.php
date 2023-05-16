<?php 
    // Define as variáveis ​​de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tingo";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

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
            echo "senha incorreta";
        } else {
            echo "senha correta";
        }
    } else {
        echo "usuario correto";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
?>