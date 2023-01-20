//FUNÇÕES: JQUERY

//Clicou no botão Logout
$(document).ready(function () {
     $("#logout").click(function () {
    
         //Limpar tudo
         document.location = 'logout.php';
         alert("INFO: Saiu da sessão com sucesso!\nClique OK para atualizar a página...");
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


