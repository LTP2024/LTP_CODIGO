<?php
    if(isset($_POST['btn_login'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = mysqli_query($conn, $sql);

        if($result->num_rows == 1){
            echo "Logado";
        }
        else{
            echo "Erro";
        }
    }
?>