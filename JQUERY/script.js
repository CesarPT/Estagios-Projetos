//FUNÇÕES: JQUERY

//Clicou no botão Logout
$(document).ready(function () {
     $("#logout").click(function () {
         alert("INFO: Saiu da sessão com sucesso!\nClique OK para atualizar a página...");
         //Limpar tudo
         document.location = 'logout.php';
     });
});
      