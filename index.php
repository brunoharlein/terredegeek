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
   <!-- title products left position -->
   <div class="leftBlocMain">
     <section>
       <h2>Nos Produits</h2>
       <h3>The best for the best ;-)<br>selection of the week</h3>
     </section>
     <audio controls="controls">
      <source src="audio/modem.mp3" type="audio/mp3" />
     </audio>
     <section>
       <h2>Our Products</h2>
       <h3>Le meilleur des meilleurs ;-)<br>Sélection de la semaine</h3>
     </section>
   </div>
   <!-- products bloc main page index.php -->
   <div class="articlesBloc">
     <article class="flex">
       <h3>Modem 56k haute vitesse</h3>
       <img src="img/modem.jpg" alt="un truc vieux">
       <a href="productDetail.php">Voir l'article</a>
     </article>
     <article class="flex">
       <h3>Carte PCI modem 56k</h3>
       <img src="img/cartemodem.jpg" alt="carte modem">
       <a href="productDetail.php">Voir l'article</a>
     </article>
     <article class="flex">
       <h3>Windows95 4 disquettes</h3>
       <img src="img/w95.jpg" alt="windows95">
       <a href="productDetail.php">Voir l'article</a>
     </article>
     <article class="flex">
       <h3>modem via Compact-Flash</h3>
       <img src="img/cfmodem.jpg" alt="modem">
       <a href="productDetail.php">Voir l'article</a>
     </article>
     <article class="flex">
       <h3>adaptateur USB filaire</h3>
       <img src="img/adapmodem.jpg" alt="modem">
       <a href="productDetail.php">Voir l'article</a>
     </article>
     <article class="flex">
       <h3>Adaptateur USB Hyper vitesse</h3>
       <img src="img/wifi.jpg" alt="modem">
       <a href="productDetail.php">Voir l'article</a>
     </article>
   </div>
   <!-- videos link bottom page -->
   <div class="">
     <section class="flexVideos">
       <iframe width="400" height="315" src="https://www.youtube.com/embed/3-Xr-U-8qcU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
       <h3>Présentation de nos travaux</h3>
       <iframe width="460" height="315" src="https://www.youtube.com/embed/GyDSgLvnPXU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
