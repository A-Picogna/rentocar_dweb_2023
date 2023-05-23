

<?php foreach ($vehicules as $vehicule): ?>

    <div>
        <img src="" alt="">
        <h4> <?=$vehicule['modele']?> </h4>
        <h4> <?=$vehicule['prix_location']?> </h4>
    </div>

    <div>
        <a href="<?=site_url() ?>/Location/index/<?=$vehicule['id']?>"><button type="submit" name="submit" class="btn">Voir le véhicule</button></a>
        <a href="<?=site_url() ?>/Vehicule/modifier"><button type="submit" name="submit" class="btn">Modifier le véhicule</button></a> 
    </div>


<?php endforeach; ?>
