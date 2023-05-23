<?php 

$optionsType = array(
    'voiture'         => 'Voiture',
    'camion'           => 'Camion',
    'moto'         => 'moto',
    'utilitaire'        => 'Utilitaire',
);

$optionsEtat = array(
    'neuf' => 'neuf',
    'tresBonEtat' => 'tres bon etat',
    'bonEtat' => 'bon etat',
    'etatDiscutable' => 'etat discutable'
);

echo form_open('vehicule/modifier', ['name' => 'modificationVehicule']);

// Form Controls
echo("<div class='form-group'");
echo form_label('Type de Véhicule', 'type_vehicule');
echo form_dropdown('type_vehicule', $optionsType, $vehiculeInfo['type_vehicule']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Kilométrage', 'kilometrage');
echo form_input(['name'=>'kilometrage','type' => 'number', 'value' => $vehiculeInfo['kilometrage'], 'id'=> 'kilometrage','placeholder'=>'kilometrage actuel du vehicule','class'=>'form-control vehicule-kilometrage']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Nombre de places', 'nb_places');
echo form_input(['name'=>'nb_places','type' => 'number', 'value' => $vehiculeInfo['nb_places'],'id'=> 'nb_places','placeholder'=>'nombre de places actuel du vehicule','class'=>'form-control vehicule-nb_places']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Marque', 'marque');
echo form_input(['name'=>'marque', 'value' => $vehiculeInfo['marque'],'id'=> 'marque','placeholder'=>'marque actuelle du vehicule','class'=>'form-control vehicule-marque']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Modele', 'modele');
echo form_input(['name'=>'modele', 'value' => $vehiculeInfo['modele'],'id'=> 'modele','placeholder'=>'modele actuel du vehicule','class'=>'form-control vehicule-modele']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Puissance (en ch)', 'puissance');
echo form_input(['name'=>'puissance', 'type' => 'number', 'value' => $vehiculeInfo['puissance'],'id'=> 'puissance','placeholder'=>'puissance actuelle du vehicule','class'=>'form-control vehicule-puissance']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Prix de base de la location', 'prix_location');
echo form_input(['name'=>'prix_location', 'type' => 'number', 'value' => $vehiculeInfo['prix_location'],'id'=> 'prix_location','placeholder'=>'prix actuelle de la location','class'=>'form-control vehicule-prix_location']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Etat', 'etat');
echo form_dropdown('etat', $optionsEtat, $vehiculeInfo['etat']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Vitesse maximale (en km/h)', 'vitesse_max');
echo form_input(['name'=>'vitesse_max', 'type' => 'number', 'value' => $vehiculeInfo['vitesse_max'],'id'=> 'vitesse_max','placeholder'=>'vitesse max actuelle de la voiture','class'=>'form-control vehicule-vitesse_max']);
echo("<div />");

echo form_submit('modifierVehicule', 'Modifier');

// Gestion des erreurs
form_error('type_vehicule', '<div class="error">', '</div>');
form_error('kilometrage', '<div class="error">', '</div>');
form_error('nb_places', '<div class="error">', '</div>');
form_error('marque', '<div class="error">', '</div>');
form_error('modele', '<div class="error">', '</div>');
form_error('puissance', '<div class="error">', '</div>');
form_error('prix_location', '<div class="error">', '</div>');
form_error('etat', '<div class="error">', '</div>');
form_error('vitesse_max', '<div class="error">', '</div>');

echo form_close();

?>




