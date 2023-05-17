<?php 

    include 'login.php';

    $nome = filter_input(INPUT_GET, 'nome');
    $email = filter_input(INPUT_GET, 'email');
    $senha = filter_input(INPUT_GET, 'senha');
    $cpf = filter_input(INPUT_GET, 'cpf', filter_validate_int);

?>