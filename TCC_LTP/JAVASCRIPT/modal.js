
function openModal(){
    // Variável do Modal
    var modal = document.getElementById("profileModal");

    // Abrir o Modal
    modal.style.display = "block";
    modal.classList.remove("fadeo");
    modal.classList.add("fade");

    // Quando clicado fora da aba, fechar ela
    window.onclick = function(event) {
        if (event.target == modal) {
          modal.classList.add("fadeo");
          setTimeout(() => {
            modal.style.display = "none";
          }, 350);
        }
    } 
}

// CADASTRO LOGO ABAIXO

function cadastro(){
    // Variável do Modal do perfil para desabilitar
    var modal = document.getElementById("profileModal");
    var modalLogin = document.getElementById("loginModal");
    modal.style.display = "none";
    modalLogin.style.display = "none";

    // Variável do Modal de Cadastro
    var modalCad = document.getElementById("cadastroModal");

    // Abrir o Modal
    modalCad.style.display = "flex";

    // Para evitar repetir uma animação do Fade Out já realizada antes, remove-la antes de executar o Fade In
    modalCad.classList.remove("fadeo");

    // Execução da animação Fade In com o acrescento da classe
    modalCad.classList.add("fade");

    // Quando clicado fora da aba, fechar ela
    window.onclick = function(event) {
        if (event.target == modalCad) {
          //Adicionar animação de Fade Out
          modalCad.classList.add("fadeo");
          // Após animação, desabilitar o Modal
          setTimeout(() => {
            modalCad.style.display = "none";
          }, 350);
        }
    } 
}

function showPassword(){
    const password = document.querySelector('#password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
}

// LOGIN LOGO ABAIXO

function login(){
    // Variável do Modal do perfil para desabilitar
    var modal = document.getElementById("profileModal");
    var modalCad = document.getElementById("cadastroModal");
    modal.style.display = "none";
    modalCad.style.display = "none";

    // Variável do Modal
    var modalLogin = document.getElementById("loginModal");

    // Abrir o Modal
    modalLogin.style.display = "flex";

     // Para evitar repetir uma animação do Fade Out já realizada antes, remove-la antes de executar o Fade In
     modalLogin.classList.remove("fadeo");

     // Execução da animação Fade In com o acrescento da classe
     modalLogin.classList.add("fade");

    // Quando clicado fora da aba, fechar ela
    window.onclick = function(event) {
      if (event.target == modalLogin) {
        //Adicionar animação de Fade Out
        modalLogin.classList.add("fadeo");
        // Após animação, desabilitar o Modal
        setTimeout(() => {
          modalLogin.style.display = "none";
        }, 350);
      }
    } 
}