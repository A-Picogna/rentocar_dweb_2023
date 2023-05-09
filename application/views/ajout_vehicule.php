
<?php echo form_open('vehicule/ajouter') ?>


  <label>
    Type de véhicule :
    <input type="text" name="type_vehicule" value="<?= $vehicule['type_vehicule'] ?>">
  </label>
  <?= form_error('type_vehicule', '<div class="error">', '</div>'); ?>
  <label>
  Kilométrage :
    <input type="number" name="kilometrage" value="<?= $vehicule['kilometrage'] ?>">
  </label>
  <?= form_error('kilometrage', '<div class="error">', '</div>'); ?>
  <label>
    Nombre de places :
    <input type="number" name="nb_places" value="<?= $vehicule['nb_places'] ?>">
  </label>
  <?= form_error('nb_places', '<div class="error">', '</div>'); ?>
  <label>
    Marque :
    <input type="text" name="marque" value="<?= $vehicule['marque'] ?>">
  </label>
  <?= form_error('marque', '<div class="error">', '</div>'); ?>
  <label>
    Modèle :
    <input type="text" name="modele" value="<?= $vehicule['modele'] ?>">
  </label>
  <?= form_error('modele', '<div class="error">', '</div>'); ?>
  <label>
    Puissance :
    <input type="number" name="puissance" value="<?= $vehicule['puissance'] ?>">
  </label>
  <?= form_error('puissance', '<div class="error">', '</div>'); ?>
  <label>
    Prix de location :
    <input type="number" name="prix_location" value="<?= $vehicule['prix_location'] ?>">
  </label>
  <?= form_error('prix_location', '<div class="error">', '</div>'); ?>
  <label>
    Etat :
    <input type="text" name="Etat" value="<?= $vehicule['Etat'] ?>">
  </label>
  <?= form_error('Etat', '<div class="error">', '</div>'); ?>
  <label>
    Vitesse max :
    <input type="number" name="vitesse_max" value="<?= $vehicule['vitesse_max'] ?>">
  </label>
  <?= form_error('vitesse_max', '<div class="error">', '</div>'); ?>

  <input type="submit" value="Save">
    

