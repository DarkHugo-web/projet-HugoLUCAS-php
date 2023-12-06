<?php require_once 'main.php';?>
<?php require_once 'header.php';?>

<body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="mb-4">Connexion</h2>
      <form action="" method="post">
        <div class="form-group">
          <label for="email">Adresse e-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
      </form>
    </div>
  </div>
</div>
</body>
<?php require_once 'footer.php'?>