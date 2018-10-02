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
     <section>
       <h3>Nous contacter</h3>
       <div class="marginContact">
        <form class="needs-validation" novalidate>
         <div class="form-row">
          <div class="col-md-4 mb-3">
           <label for="validationCustom01">Nom</label>
           <input type="text" class="form-control" id="validationCustom01" placeholder="Nom" value="" required>
            <div class="valid-feedback">
            Looks good!
            </div>
           </div>
           <div class="col-md-4 mb-3">
            <label for="validationCustom02">Prénom</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Prénom" value="" required>
           <div class="valid-feedback">
           Looks good!
           </div>
          </div>
          <div class="col-md-4 mb-3">
           <label for="inputEmail3">Email</label>
            <div class="input-group">
             <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
             </div>
             <input type="email" class="form-control" id="inputEmail3" placeholder="E-mail" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
            Please choose a email.
            </div>
           </div>
          </div>
         </div>
         <div class="form-row">
          <div class="col-md-6 mb-3">
          <label for="validationCustom03">Adresse</label>
          <input type="text" class="form-control" id="validationCustom03" placeholder="Adresse" required>
          <div class="invalid-feedback">
          Please provide a valid adresse.
          </div>
         </div>
         <div class="col-md-5 mb-3">
          <label for="validationCustom04">Ville</label>
          <input type="text" class="form-control" id="validationCustom04" placeholder="Ville" required>
         <div class="invalid-feedback">
         Please provide a valid ville.
         </div>
        </div>
        <div class="col-md-2 mb-3">
         <label for="validationCustom05">Code Postale</label>
         <input type="text" class="form-control" id="validationCustom05" placeholder="Code postale" required>
        <div class="invalid-feedback">
        Please provide a valid code postale.
        </div>
       </div>
      </div>
      <button class="btn btn-primary mt-5 mb-5" type="submit">Envoyer</button>
     </form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
       </div>
      </section>
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
