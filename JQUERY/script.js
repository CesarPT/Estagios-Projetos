//FUNÇÕES: JQUERY

//Clicou no botão Logout
$(document).ready(function () {
     $("#logout").click(function () {
         alert("INFO: Saiu da sessão com sucesso!\nClique OK para atualizar a página...");
         //Limpar tudo
         document.location = 'logout.php';
     });
});
      
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}