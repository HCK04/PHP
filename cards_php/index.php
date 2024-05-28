<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Cards PHP</title>
</head>
<body>
  
<div class="container mx-auto mt-4">
  <div class="row">
    <?php
      $info_etud = array(
        array(
          "nom" => "Maih",
          "prenom" => "Akram",
          "age" => 19,
          "class" => "PHP"
        ),
        array(
          "nom" => "Lokhmi",
          "prenom" => "Lokman",
          "age" => 22,
          "class" => "HTML"
        ),
        array(
          "nom" => "Hamouda",
          "prenom" => "Mohamed",
          "age" => 210,
          "class" => "CS"
        ),
        array(
            "nom" => "Hamouda",
            "prenom" => "Mohamed",
            "age" => 210,
            "class" => "CS"
          )
      );

      foreach ($info_etud as $etudiant) {
    ?>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $etudiant['nom'] . ' ' . $etudiant['prenom']; ?></h5>
          <h6 class="card-subtitle mb-2 text-success">Age: <?php echo $etudiant['age']; ?></h6>
          <p class="card-text">Classe: <?php echo $etudiant['class']; ?></p>
          <a href="https://github.com/HCK04" class="btn mr-2"><i class="fas fa-link"></i>Profile GitHub</a>
        </div>
      </div>
    </div>    
    <?php
      }
    ?>
</body>
</html>
