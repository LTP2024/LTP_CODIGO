<?php
include "conexao.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['emailVar'];
    $senha = $_POST['senhaVar'];

    if ($email && $senha){

        $sql   = "INSERT INTO 'login' (email,senha) VALUES ($email,$senha)";

        if(mysqli_query($conn, $sql)){
            
            $sql_2 = "SELECT * FROM 'login' INNER JOIN usuario ON 'login'.email = usuario.email";

            if(mysqli_query($conn, $sql_2)){

                


            } else {
                echo "tabela nao comparada";
            }
        } else {
            echo "Login não inserido";
        }
    }
}



?>