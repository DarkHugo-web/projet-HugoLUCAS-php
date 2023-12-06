<?php require_once 'main.php';?>
<?php require 'header.php';?>

<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="mb-4">Inscription</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="username">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="username">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
          <label for="username">Téléphone</label>
          <input type="tel" class="form-control" id="tel" name="tel" required>
        </div>
        <div class="form-group">
          <label for="email">Adresse e-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirmer le mot de passe</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
<?php require_once 'footer.php'?>