<!-- <form action="" method="post" class="form-example"> -->
<?php echo validation_errors(); ?>
<?php echo $form_open; ?>
    <label>Location du</label>
    <input type="date" name="deb">
    <label>au</label>
    <input type="date" name="fin">
    <label>Longueur trajet Prévue (Km)</label>
    <input type='number' name='km'>
    <input type='hidden' name='vehid' value=<?=$vehicule_info["id"]?>>
    <input type='hidden' name='userid' value=<?=1?>>
    <input type="submit" value="Valider la location">
</form>
<!-- <?php var_dump($vehicule_info)?> -->
<?=
'<p><strong>Id</strong> = '.$vehicule_info["id"].'<p>'.
'<p><strong>type_vehicule = </strong>'.$vehicule_info["type_vehicule"].'</p>'.
'<p><strong>kilometrage = </strong>'.$vehicule_info["kilometrage"].'</p>'.
'<p><strong>nb_places = </strong>'.$vehicule_info["nb_places"].'</p>'.
'<p><strong>marque = </strong>'.$vehicule_info["marque"].'</p>'.
'<p><strong>modele = </strong>'.$vehicule_info["modele"].'</p>'.
'<p><strong>puissance = </strong>'.$vehicule_info["puissance"].'</p>'.
'<p><strong>prix_location = </strong>'.$vehicule_info["prix_location"].'</p>'.
'<p><strong>etat = </strong>'.$vehicule_info["etat"].'</p>'.
'<p><strong>vitesse_max = </strong>'.$vehicule_info["vitesse_max"].'</p>'  
?>