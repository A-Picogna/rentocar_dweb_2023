<?php
echo validation_errors();
echo form_open('vehicule/ajouter') ?>


<label>
  Type de véhicule :
  <input type="text" name="type_vehicule" value="<?= set_value('type_vehicule') ?>">
</label>
<?= form_error('type_vehicule', '<div class="error">', '</div>'); ?>
<label>
  Kilométrage :
  <input type="number" name="kilometrage" value="<?= set_value('kilometrage') ?>">
</label>
<?= form_error('kilometrage', '<div class="error">', '</div>'); ?>
<label>
  Nombre de places :
  <input type="number" name="nb_places" value="<?= set_value('nb_places') ?>">
</label>
<?= form_error('nb_places', '<div class="error">', '</div>'); ?>
<label>
  Marque :
  <input type="text" name="marque" value="<?= set_value('marque') ?>">
</label>
<?= form_error('marque', '<div class="error">', '</div>'); ?>
<label>
  Modèle :
  <input type="text" name="modele" value="<?= set_value('modele') ?>">
</label>
<?= form_error('modele', '<div class="error">', '</div>'); ?>
<label>
  Puissance :
  <input type="number" name="puissance" value="<?= set_value('puissance') ?>">
</label>
<?= form_error('puissance', '<div class="error">', '</div>'); ?>
<label>
  Prix de location :
  <input type="number" name="prix_location" value="<?= set_value('prix_location') ?>">
</label>
<?= form_error('prix_location', '<div class="error">', '</div>'); ?>
<label>
  Etat :
  <input type="text" name="etat" value="<?= set_value('etat') ?>">
</label>
<?= form_error('Etat', '<div class="error">', '</div>'); ?>
<label>
  Vitesse max :
  <input type="number" name="vitesse_max" value="<?= set_value('vitesse_max') ?>">
</label>
<?= form_error('vitesse_max', '<div class="error">', '</div>'); ?>

<button type="submit">Save</button>