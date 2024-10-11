<?php
include "conexao.php";
session_start();

// verificação dos dados enviados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // coleta dados do formulário
        $nome  = $_POST['nameVar'];
        $email = $_POST['emailVar'];
        $senha = $_POST['senhaVar'];

        // verificação dos campos nome, email e senha
        if ($nome && $email && $senha){
                // criptografia de senha
                $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

                // inserção de dados na tabela "usuario"
                $sql = "INSERT INTO usuario (nome, email, senha)
                VALUES ('$nome', '$email', '$senha_hash')";

                // verificar se o comando foi executado
                if (mysqli_query($conn, $sql)){
                        // após o cadastro, guarda o nome do usuário na sessão
                        $_SESSION['usuario'] = $nome;   

                        // redirecionamento do usuário para a página do perfil
                        header("Location: perfil.php");

                } else {
                        echo "Ocorreu um erro no cadastro, tente novamente.";
                }
        } else {
                echo "Por favor, preencha todos os campos.";
        }
}
?>
