<?php 

$optionsType = array(
    'Berline'         => 'Berline',
    'SUV'           => 'SUV',
    '4x4'         => '4x4',
    'Utilitaire'        => 'Utilitaire',
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
echo form_dropdown('type_vehicule', $optionsType, 'Berline');
echo("<div />");

echo("<div class='form-group'");
echo form_label('Kilométrage', 'kilometrage');
echo form_input(['name'=>'kilometrage','type' => 'number', 'id'=> 'kilometrage','placeholder'=>'kilometrage actuel du vehicule','class'=>'form-control vehicule-kilometrage']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Nombre de places', 'nb_places');
echo form_input(['name'=>'nb_places','type' => 'number','id'=> 'nb_places','placeholder'=>'nombre de places actuel du vehicule','class'=>'form-control vehicule-nb_places']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Marque', 'marque');
echo form_input(['name'=>'marque','id'=> 'marque','placeholder'=>'marque actuelle du vehicule','class'=>'form-control vehicule-marque']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Modele', 'modele');
echo form_input(['name'=>'modele','id'=> 'modele','placeholder'=>'modele actuel du vehicule','class'=>'form-control vehicule-modele']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Puissance (en ch)', 'puissance');
echo form_input(['name'=>'puissance', 'type' => 'number','id'=> 'puissance','placeholder'=>'puissance actuelle du vehicule','class'=>'form-control vehicule-puissance']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Prix de base de la location', 'puissance');
echo form_input(['name'=>'prix_location', 'type' => 'number','id'=> 'prix_location','placeholder'=>'prix actuelle de la location','class'=>'form-control vehicule-prix_location']);
echo("<div />");

echo("<div class='form-group'");
echo form_label('Etat', 'etat');
echo form_dropdown('etat', $optionsEtat, 'neuf');
echo("<div />");

echo("<div class='form-group'");
echo form_label('Vitesse maximale (en km/h)', 'vitesse_max');
echo form_input(['name'=>'vitesse_max', 'type' => 'number','id'=> 'vitesse_max','placeholder'=>'vitesse max actuelle de la voiture','class'=>'form-control vehicule-vitesse_max']);
echo("<div />");

echo form_submit('modifierVehicule', 'Modifier');

?>




