<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Terre De Geek</title>
  <meta name="description" content="website webshop html/css and include php">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Quantico" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
<!-- start include php nav and header -->
<?php
  include "template/nav.php";
  include "template/header.php";
 ?>
 <!-- end PHP -->

 <!-- start html -->
 <main>
   <!-- start pict and gif  -->
   <figure>
     <img src="img/new.gif" alt="new">
     <img src="img/w95.jpg" alt="w95">
     <img src="img/new.gif" alt="new">
   </figure>
   <!-- start left bloc page -->
   <div class="flexProductDetail">
     <article class="MainDivArticleProductDetail">
       <h3>Windows95</h3>
       <p>Oui ! nous en avons un ! Version 4 disquettes<br>J'espére que vous avez un lecteur ?<br>Ce petit bijoux ne restera pas longtemps en boutique.<br>
       Cette piéce unique (C'est notre 3éme exemplaire depuis les 5 ans de la boutique)<br>fera le bonheur des GEEKS !!<br>Fétons ça avec une bordure aux couleurs de Windows95 !!</p>
     </article>
     <!-- start caracteristique page  -->
     <section class="MainDivSectionProductDetail">
       <h3>Caractéristiques</h3>
       <p class="marginP">Version 4 disquettes 3,5 pouces</p>
       <p class="marginP">État : Occasion en bon état. Installation faite en boutique.</p>
       <p class="marginP">Garantie : Pas de garantie sur les logiciels en occasion.</p>
       <h3 class="marginP">PRIX : 120€</h3>
       <a class="btnProductDetail" href="#">Acheter</a>
     </section>
   </div>
 </main>
 <!-- end html -->

 <!-- start include php footer -->
 <?php
   include "template/footer.php";
  ?>
  <!-- end PHP -->


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
