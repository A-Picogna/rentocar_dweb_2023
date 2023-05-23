<link href="<?=base_url() ?>/css/loc.css" rel="stylesheet">
<div class='location-page'>
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
        <input type="submit" class='validloc' value="Valider la location">
    </form>
    <div class="loc-card">
        <div class="top-infos">
            <div class="left-info">
                <h1 class="loc-nom"><?=$vehicule_info["modele"]?></h1>
                <h3 class="loc-type"><?=$vehicule_info["type_vehicule"]?></h3>
            </div>
            <div class="right-info">
                <div class="card-container">
                    <div class="card"><?=$vehicule_info["kilometrage"]?> KM</div>
                    <div class="card"><?=$vehicule_info["nb_places"]?> Places</div>
                    <div class="card"><?=$vehicule_info["etat"]?></div>
                    <div class="card"><?=$vehicule_info["vitesse_max"]?> Km/h V.Max</div>
                </div>
            </div>
        </div>
        <div class="price-info">
            <h3 class="loc-type">Prix de location:</h3>
            <h2><?=$vehicule_info["prix_location"]?> €</h2>
        </div>

    </div>
</div>
