<?php require_once '../../utils/constant.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <!--Ici vous pouvez importer votre librairie de design-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../index.css">

</head>


<body>
  <?php include __ROOTDIR__ . '/components/header.php'; ?>
  <div>
    <form action="post-message" method="POST">
      <div class=" form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
        <input type="text" name="nom" class="form-control" id="inputName" placeholder="Nom">
      </div>
      <div class="form-group row">
        <label for="inputLastname" class="col-sm-2 col-form-label">Prenom</label>
        <input type="text" name="prenom" class="form-control" id="inputLastname" placeholder="Prenom">
      </div>
      <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
      <div class="form-group row">
        <label for="inputDetail" class="col-sm-2 col-form-label">Description</label>
        <textarea name="description" class="form-control" id="inputDetail" placeholder="Détaillez ici la raison de votre mail"></textarea>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </div>
    </form>
    <?php include __ROOTDIR__ . '/components/footer.php'; ?>
</body>

</html>