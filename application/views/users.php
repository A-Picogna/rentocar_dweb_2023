<link rel="stylesheet" href="<?php echo base_url(); ?>css/global.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/users.css">
<script src="<?php echo base_url(); ?>js/editUserType.js" defer></script>

<header class="card">
    <h1>Utilisateurs</h1>
</header>


<?= form_open('users') ?>
<button class="save" type="submit">
    <img src="<?= base_url() ?>/assets/save.svg" alt="save">
</button>
<?php
foreach ($users as $user) {
?>
    <div class="card user">
        <img src="<?= base_url() ?>assets/profile.svg" alt="photo de profil">
        <h2 class="name"><?= $user['nom'] . ' ' . $user['prenom'] ?></h2>
        <p class="mail"><?= $user['email'] ?></p>
        <label>
            <span>Type utilisateur :</span>

            <select id="type-<?= $user["id"] ?>" name="type[]">
                <option value="<?= $user["id"] ?>-client" <?php if ($user['type_utilisateur'] == 'client') echo 'selected' ?>>Client</option>
                <option value="<?= $user["id"] ?>-agent" <?php if ($user['type_utilisateur'] == 'agent') echo 'selected' ?>>Agent</option>
            </select>
        </label>

    </div>


<?php
}
?>
</form>