<?php
include "../PHP/conexao.php";
session_start();

if(!empty($_SESSION['usuario'])){
    $nome    = $_SESSION['usuario'];
    $sql     = "SELECT * FROM usuario WHERE nome = '$nome'";
    $result  = mysqli_query($conn, $sql);
    $usuario = $result->fetch_assoc();
} else {
    $nome    = "O que deseja realizar!";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo do web site-->
    <title>Gravacoes</title>

    <!-- Icones da internet-->
    <script src="https://kit.fontawesome.com/a1b6c149c0.js" crossorigin="anonymous"></script>

    <!-- Link para o arquivo de css da página -->
    <link rel="stylesheet" href="../CSS/style-gravacoes.css">

    <!-- Link para o arquivo de css dos modals da página -->
    <link rel="stylesheet" href="../CSS/modal.css">

    <!-- Link para o ícone da logo na aba da página-->
    <link rel="shortcut icon" href="../imagem/logo_vetor_.ico" type="image/x-icon">
</head>
<body>
    <!-- Cabeçalho do website-->
    <header>
        <div class="cabecalho-css">
            <!-- Logo do produto Luz! Teatro! Play! -->
            <div class="logo-css">
                <!-- Imagem da Empresa -->
                <a href="../index.html">
                    <img src="../imagem/logo(vetor).svg" alt="#" class="imagem-css">
                </a>
  
                <!-- Título da empresa -->
                <p class="logo-txt">Luz! Teatro! Play!</p>
            </div>
  
            <!-- Botoes de encaminhamento-->
            <div class="topico-css">
                <!-- Nav onde ficará localizado os botões-->
                <nav>
                    <a href="../HTML/gravacoes.php" class="button-header">Gravações</a>
                    <a href="../index.html" class="button-header">Noticias de artes</a>
                    <a href="../HTML/assinatura.html" class="button-header">Assinatura</a>
                    <a href="../HTML/about.html" class="button-header">Sobre nós</a>
                </nav>
            </div>
            <!-- Script que executa os modals de login e cadastro -->
            <script src="../JAVASCRIPT/modal.js"></script>
            <!-- Imagem do usuario -->
            <div class="imagem-usuario" onclick="openModal()">
                <img src="../imagem/user.svg" alt="userimage" class="imagem-usuario-formato">
            </div>
        </div>
    </header>

    <!-- Modal do perfil -->
  <div id="profileModal" class="profileModal">
    <div class="profile_content">
        <!-- Nome do Usuário e imagem -->
        <div class="image-prof">
            <img src="../imagem/user.svg" alt="userphoto" class="image-profile">
        </div>

        <!-- Botões do modal -->
        <div class="btn">
            <p class="username">Olá! <?=$nome?></p>

            <!-- Botão de cadastrar -->
            <button id="profileCad" class="btn_style t1" onclick="cadastro()"> Cadastrar </button>
            
            <!-- Botão de Logar -->
            <button id="profileLogin" class="btn_style t1" onclick="login()"> Logar </button>
            
            <!-- Botão de Deslogar, ela só aparece caso o sistema estiver logado a uma conta -->
            <button name="profileLogout" class="btn_style t2"> Desconectar</button>
        </div>
    </div>
</div>

<!-- Modal de Cadastro -->
<div id="cadastroModal" class="cadastroModal">
    <!-- Conteúdo do Modal-->
    <div class="cadastro_content">
        <!-- Título do Modal -->
        <h2 class="titleCad">Cadastro</h2>

        <!-- Formulário para o cadastro da conta -->
        <form action="../PHP/insere.php" method="post" class="cadastroForm">
            <!-- Nome de Usuário -->
            <label for="#">Nome de Usuário:</label>
            <input type="text" name="nameVar" id="nameCad" class="inputCadastro" placeholder="Digite Aqui" maxlength="32" required> 
            <!-- Email do Usuário -->
            <label for="#">Email:</label>
            <input type="email" name="emailVar" id="emailCad" class="inputCadastro" placeholder="Digite aqui" maxlength="128" required>
            <!-- Senha do Usuário-->
            <label for="#">Senha:</label>
            <input type="password" name="senhaVar" id="passwordCad" id="password" class="inputCadastro" placeholder="Digite aqui" maxlength="32" required>
            <!-- Botão que revela a senha para o Usuário -->
            <i class="fa-solid fa-eye showPassword" onclick="showPassword()"></i>
            <hr>
            <!-- Botão que cadastra o usuário, enviando os dados acima para o Banco de dados -->
            <input type="submit" value="Cadastrar" class="inputButton">
            <!-- Caso o usuário já possuir uma conta e clicar no botão abaixo, ir para o Modal de Login -->
            <p class="linkLogin" onclick="login()">Já possui conta? Entre aqui!</p>
        </form>
    </div>
</div>

<!-- Modal de Login-->
 <div id="loginModal" class="loginModal">
    <!-- Conteúdo do Modal-->
    <div class="login_content">
        <!-- Título do Modal -->
        <h2 class="titleCad">Login</h2>

        <!-- Formulário para o login da conta -->
        <form action="#" method="post" class="loginForm">
            <!-- Email do Usuário -->
            <label for="#">Email:</label>
            <input type="email" name="emailVar" id="emailLog" class="inputCadastro" placeholder="Digite Aqui">
            <!-- Senha do Usuário-->
            <label for="#">Senha:</label>
            <input type="password" name="senhaVar" id="passwordLog" id="password" class="inputCadastro" placeholder="Digite aqui">
            <!-- Botão que revela a senha para o Usuário -->
            <i class="fa-solid fa-eye showPassword" onclick="showPassword()"></i>
            <hr>
            <!-- Botão que loga o usuário, comparando os dados com o banco de dados -->
            <input type="submit" value="Login" class="inputButton">
            <!-- Caso o usuário não possuir uma conta e clicar no botão abaixo, ir para o Modal de Cadastro -->
            <p class="linkLogin"> <a href="HTML/recuperacao.html" class="alink">Esqueceu a senha? Clique aqui</a></p>
        </form>
    </div>
 </div>

 <main>
    <div class="aba-gravacoes">
        <div class="topico-gravacoes">
            <div class="capa-film">
                <img src="../imagem/test3.jpg" alt="Filme" class="film-img">
                <button class="watch-ab">
                    <i class="fa-solid fa-circle-play play"></i>
                </button>
            </div>

            <div class="describe-film">
                <h2>Chico Bento no Shopping</h2>
                <p class="describe-txt">Em 2016 coloquei como uma das metas do ano "Aprender a fazer um bom nhoque", mas foi só no final de 2018 que finalmente fiz um nhoque com cara e sabor de nhoque. Um prato que eu pensei "Eu pagaria por isso em um restaurante. Não pagaria muito caro, mas pagaria". E considerando meus talentos gastronômicos, pra mim isso foi uma baita conquista, que só foi possível porque eu me empenhei muito mais do que nos anos anteriores. </p>
                <button class="download-btn">
                    <i class="fa-solid fa-download"></i>
                </button>
            </div>
        </div>
    </div>
 </main>

 <footer>
    <!--Cabeçalho-->
      <div class="footer">
        <!--Parte onde se encontra os contatos-->
        <div class="contato">
            <h2> Contatos</h2>
            <div class="contacts">
                <a href="mailto:luzteatro2024@gmail.com" class="contact"><i class="fa-solid fa-envelope"></i>luzteatro2024@gmail.com </a>
                <a href="+5535991954109" class="contact"><i class="fa-solid fa-phone"> </i> 35 99195-4109</a>
            </div>
        </div>
        <!-- Parte onde se encontra a logo da empresa-->
        <div class="empresa">
            <h2> Empresa desenvolvedora</h2>
            <img src="../imagem/logo.png" alt="empresa" class="img-empresa">

        </div>
        <!-- Parte onde se encontra as redes sociais-->
        <div class="redes-sociais">
            <h2> Redes Sociais</h2>
            <div class="social">
                <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                <a href="#"> <i class="fa-brands fa-youtube"></i></a>
            </div>
          
        </div>
    </div>
 </footer>
  
</body>
</html>