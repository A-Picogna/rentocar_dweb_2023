<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      margin: 0;
    }
  </style>
</head>

<body>
  <p>Nom: <?= $client['nom'] ?></p>
  <p>Prenom: <?= $client['prenom'] ?></p>
  <p>Date de naissance: <?= $client['ddn'] ?></p>
  <p>Email: <?= $client['email'] ?></p>
  <a href="<?php echo site_url('profil/edit') ?>">Edit</a>

</body>

</html>