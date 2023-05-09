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

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('profil/edit') ?>
  <label>
    Nom:
    <input type="text" name="nom" value="<?= $client['nom'] ?>">
  </label>
  <label>
    Prenom:
    <input type="text" name="prenom" value="<?= $client['prenom'] ?>">
  </label>
  <label>
    Date de naissance:
    <input type="date" name="ddn" value="<?= $client['ddn'] ?>">
  </label>
  <label>
    Email:
    <input type="email" name="email" value="<?= $client['email'] ?>">
  </label>

  <a href="<?php echo site_url('profil') ?>">Cancel</a>
  <input type="submit" value="Save">
  </form>
</body>

</html>