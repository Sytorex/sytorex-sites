<div class="menu">
   <br /><img src="images/nav/logo.jpg"  alt="Logo de la mini-entreprise" class="logo"/>
   <nav class="nav">
      <ul class="navig">
         <li class="navig-accueil"><a href="index.php">Accueil</a></li>
         <li class="navig-equipe"><a href="equipe.php"> équipe</a></li>
         <li class="navig-produit"><a href="produit.php"> Produit</a></li>
         <li class="navig-parcour"><a href="parcour.php"> Parcours</a></li>
      </ul>    
   </nav> 
</div>

<nav class="menu-tel">
   <div class="bars"><img src="images/nav/bars.png" alt="Image des trois barres"> Mésitou</div>
   <ul class="nav-tel"> 
      <li class="li-accueil"><a href="index.php"><img src="images/nav/home.png" alt="Image d'accueil">  Accueil</a></li>
      <li class="li-equipe"><a href="equipe.php"><img src="images/nav/team.png" alt="Image d'équipe">  Équipe</a></li>
      <li class="li-produit"><a href="produit.php"><img src="images/nav/wood.png" alt="Image de produit">  Produit</a></li>
      <li class="li-parcour"><a href="parcour.php"><img src="images/nav/history.png" alt="Image de parcours">  Parcours</a></li>
      <li class="li-acheter"><a href="acheter.php"><img src="images/nav/buy.png" alt="Image d'acheter">  Acheter</a></li>
      <li class="li-contacter"><a href="contacter.php"><img src="images/nav/contact.png" alt="Image de contacter"> Contacter</a></li>
      <li class="li-evenement"><a href="evenement.php"><img src="images/nav/calendar.png" alt="Image d'événement"> Événement</a></li>
   </ul>
   <script>
      document.querySelector(".bars").onclick = function() 
      {
         if (window.getComputedStyle(document.querySelector('.nav-tel')).display=='none')
         {
         document.querySelector(".nav-tel").style.display="block";} 
         else 
         {
         document.querySelector(".nav-tel").style.display="none";
         }
      }
   </script>
</nav>
