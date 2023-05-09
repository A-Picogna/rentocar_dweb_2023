

<?php foreach ($vehicules as $vehicule): ?>

    <div>
        <img src="" alt="">
        <h4> <?=$vehicule['modele']?> </h4>
        <h4> <?=$vehicule['prix_location']?> </h4>
    </div>

    <div>
        <button type="submit" name="submit">Voir le véhicule</button>
        <button type="submit" name="submit">Modifier le véhicule</button>   
    </div>


<?php endforeach; ?>
