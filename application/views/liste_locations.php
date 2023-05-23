

<!-- Formulaire de suppression -->
<?php echo form_open('location/delete');?>

<?php foreach ($vehicules as $vehicule){?>
    <h4> <?=$vehicule['date_debut']?> </h4>
    <h4> <?=$vehicule['vehicule_id']?> </h4>
    <input type="submit" value="Annuler">

<?php };?>
