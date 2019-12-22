




function getMessages(){
  //alert('test');
  // 1. Elle doit créer une requête AJAX pour se connecter au serveur, et notamment au fichier handler.php
  const requeteAjax = new XMLHttpRequest();
  requeteAjax.open("GET", "support.php");

  // 2. Quand elle reçoit les données, il faut qu'elle les traite (en exploitant le JSON) et il faut qu'elle affiche ces données au format HTML
  requeteAjax.onload = function(){
    const resultat = JSON.parse(requeteAjax.responseText);
    console.log(resultat);
    const html = resultat.reverse().map(function(support){
      return `
        <div class="chat-box">
          ${support.messages.substring(11, 16)}
        </div>
          <small class="opacity-6">
            <i class="fa fa-calendar-alt mr-1"></i>
            ${support.date.substring(11, 16)}</span>  
      `
    }).join('');

    const supports = document.querySelector('.supports');
    supports.innerHTML = html;
    supports.scrollTop = supports.scrollHeight;
  }

  // 3. On envoie la requête
  requeteAjax.send();
}
 