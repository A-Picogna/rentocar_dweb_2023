<?php
echo validation_errors();
echo form_open('vehicule/ajouter') ?>


<label >
  <p>Type de véhicule :</p>
  <input type="text" name="type_vehicule" value="<?= set_value('type_vehicule') ?>"class="btn ajout">
</label>
<?= form_error('type_vehicule', '<div class="error">', '</div>'); ?>
<label >
    <p>Kilométrage :</p>
  <input type="number" name="kilometrage" value="<?= set_value('kilometrage') ?>"class="btn ajout">
</label>
<?= form_error('kilometrage', '<div class="error">', '</div>'); ?>
<label >
  <p>Nombre de places :</p>
  <input type="number" name="nb_places" value="<?= set_value('nb_places') ?>"class="btn ajout">
</label>
<?= form_error('nb_places', '<div class="error">', '</div>'); ?>
<label >
  <p>Marque :</p>
  <input type="text" name="marque" value="<?= set_value('marque') ?>"class="btn ajout">
</label>
<?= form_error('marque', '<div class="error">', '</div>'); ?>
<label >
  <p>Modèle :</p>
  <input type="text" name="modele" value="<?= set_value('modele') ?>"class="btn ajout">
</label>
<?= form_error('modele', '<div class="error">', '</div>'); ?>
<label >
  <p>Puissance :</p>
  <input type="number" name="puissance" value="<?= set_value('puissance') ?>"class="btn ajout">
</label>
<?= form_error('puissance', '<div class="error">', '</div>'); ?>
<label >
  <p>Prix de location :</p>
  <input type="number" name="prix_location" value="<?= set_value('prix_location') ?>"class="btn ajout">
</label>
<?= form_error('prix_location', '<div class="error">', '</div>'); ?>
<label >
  <p>Etat :</p>
  <input type="text" name="etat" value="<?= set_value('etat') ?>"class="btn ajout">
</label>
<?= form_error('Etat', '<div class="error">', '</div>'); ?>
<label >
  <p>Vitesse max :</p>
  <input type="number" name="vitesse_max" value="<?= set_value('vitesse_max') ?>"class="btn ajout">
</label>
<?= form_error('vitesse_max', '<div class="error">', '</div>'); ?>

<button type="submit">Save</button>