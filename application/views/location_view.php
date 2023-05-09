
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Location</title>
  <style>
  </style>
</head>
<form action="" method="post" class="form-example">
    <label>Dates de Location</label>
    <input type="date" name="name" id="name">
    <label>Longueur trajet (Km)</label>
    <select name="time-travel">
        <option value="1">51 à 100 : (50 centimes)</option>
        <option value="2">101 à 200 : (30 centimes)</option>
        <option value="3">201 à 300 : (20 centimes)</option>
        <option value="4">> 300 : (10 centimes)</option>
    </select>
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