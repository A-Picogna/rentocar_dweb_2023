<h2>Vos locations</h2>

<?php foreach ($locations as $loc){?>
    <img src="" alt="">
    <h4> <?=$loc['date_debut']?> </h4>
    <h4> <?=$loc['vehicule_id']?> </h4>

    <a href="<?= site_url();?>/location/delete/<?=$loc['id']?>"><button>Annuler</button></a>


<?php };?>
