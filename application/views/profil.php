<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/global.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/profile.css">
  <script src="<?php echo base_url(); ?>js/editProfile.js" defer></script>
</head>



<body>
<?php
$dateMin = date('Y-m-d', strtotime('-100 years'));
$dateMax = date('Y-m-d', strtotime('-18 years'));
?>
  <header class="card">
    <h1>Mon profil</h1>
  </header>
  <main class="card">
    <?php
    if (isset($delete_error)) {
      echo $delete_error;
    }
    ?>
    <img src="<?php echo base_url(); ?>assets/profile.svg" alt="photo de profil" class="photo">
    <?php echo form_open('profil') ?>
    <fieldset>
      <label>
        <span>Nom :</span>
        <input type="text" name="nom" value="<?= $client['nom'] ?>" readonly>
        <button data-for="nom"><img src="<?= base_url() ?>assets/edit.svg" alt="edit" /> </button>
      </label>
      <?= form_error('nom', '<div class="error">', '</div>'); ?>
      <label>
        <span>Prenom :</span>
        <input type="text" name="prenom" value="<?= $client['prenom'] ?>" readonly>
        <button data-for="prenom"><img src="<?= base_url() ?>assets/edit.svg" alt="edit" />
        </button>
      </label>
      <?= form_error('prenom', '<div class="error">', '</div>'); ?>
      <label>
        <span>Date de naissance :</span>
        <input type="date" name="ddn" value="<?= $client['ddn'] ?>" min="<?= $dateMin ?>" max="<?= $dateMax ?>" readonly>
        <button data-for="ddn"><img src="<?= base_url() ?>assets/edit.svg" alt="edit" /> </button>
      </label>
      <?= form_error('date', '<div class="error">', '</div>'); ?>
      <label>
        <span>Email :</span>
        <input type="email" name="email" value="<?= $client['email'] ?>" readonly>
        <button data-for="email"><img src="<?= base_url() ?>assets/edit.svg" alt="edit" />
        </button>
      </label>
      <?= form_error('email', '<div class="error">', '</div>'); ?>
    </fieldset>

    <input type="submit" value="Sauvegarder" class="btn save">
    <!-- <input type="submit" name="delete" value="Delete"> -->
    </form>
  </main>
</body>

</html>