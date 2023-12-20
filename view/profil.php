<?php require_once 'main.php';?>
<?php require_once 'header.php';?>
<style>
    body {
        background-color: black;
    }
</style>

<?php ?>
<body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-white mb-4">information : </h2>
      <form action="" method="post">
        <div class="form-group">
          <label class="text-white" for="username">Nom : <?=@ $_SESSION['nom']?></label>
        </div>
        <div class="form-group">
          <label class="text-white" for="username">Prénom : <?=@ $_SESSION['prenom']?></label>
        </div>
        <div class="form-group">
          <label class="text-white" for="username">Téléphone : <?=@ $_SESSION['tel']?></label>
        </div>
        <div class="form-group">
          <label class="text-white" for="email">Adresse e-mail : <?=@ $_SESSION['email']?></label>
        </div>
        <a href="/suppression"><button  id="Delete" type="button" class="btn btn-primary me-2">Supprimer son compte</button></a>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>   
