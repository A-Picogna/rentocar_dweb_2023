<?php
echo validation_errors();
echo form_open('vehicule/ajouter') ?>

<div class="form_ajout">
  <label class="ajout l1">
    <p>Type de véhicule :</p>
    <select name="type_vehicule" class="btn ajout">
      <option value="voiture">Voiture</option>
      <option value="camion">Camion</option>
      <option value="moto">Moto</option>
      <option value="utilitaire">Utilitaire</option>
    </select>
  </label>
  <?= form_error('type_vehicule', '<div class="error">', '</div>'); ?>
  <label class="ajout l2">
      <p>Kilométrage :</p>
    <input type="number" name="kilometrage" value="<?= set_value('kilometrage') ?>"class="btn">
  </label>
  <?= form_error('kilometrage', '<div class="error">', '</div>'); ?>
  <label class="ajout l3">
    <p>Nombre de places :</p>
    <input type="number" name="nb_places" value="<?= set_value('nb_places') ?>"class="btn">
  </label>
  <?= form_error('nb_places', '<div class="error">', '</div>'); ?>
  <label class="ajout l4">
    <p>Marque :</p>
    <input type="text" name="marque" value="<?= set_value('marque') ?>"class="btn">
  </label>
  <?= form_error('marque', '<div class="error">', '</div>'); ?>
  <label class="ajout l5">
    <p>Modèle :</p>
    <input type="text" name="modele" value="<?= set_value('modele') ?>"class="btn">
  </label>
  <?= form_error('modele', '<div class="error">', '</div>'); ?>
  <label class="ajout l6">
    <p>Puissance :</p>
    <input type="number" name="puissance" value="<?= set_value('puissance') ?>"class="btn">
  </label>
  <?= form_error('puissance', '<div class="error">', '</div>'); ?>
  <label class="ajout l7">
    <p>Prix de location :</p>
    <input type="number" name="prix_location" value="<?= set_value('prix_location') ?>"class="btn">
  </label>
  <?= form_error('prix_location', '<div class="error">', '</div>'); ?>
  <label class="ajout l8">
    <p>Etat :</p>
    <select name="etat " class="btn ajout">
      <option value="neuf">Neuf</option>
      <option value="tresBonEtat">Très bon état</option>
      <option value="bonEtat">Bon état</option>
      <option value="etatDiscutable">état discutable</option>
    </select>
  </label>
  <?= form_error('Etat', '<div class="error">', '</div>'); ?>
  <label class="ajout l9">
    <p>Vitesse max :</p>
    <input type="number" name="vitesse_max" value="<?= set_value('vitesse_max') ?>"class="btn">
  </label>

  <input type="submit" value="Save" class="btn save">
      
</div>