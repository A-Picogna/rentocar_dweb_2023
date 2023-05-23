<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link rel="stylesheet" href="css/nav.css">

<div id="container">
    <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Changer mon mot de passe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="layouts/change_password.php" method="POST">
                        <label for='current_password'>Mot de passe actuel</label>
                        <input type="password" id="current_password" name="current_password" class="form-control"
                            required />
                        <br />
                        <label for='new_password'>Nouveau mot de passe</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" required />
                        <br />
                        <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                        <input type="password" id="new_password_retype" name="new_password_retype" class="form-control"
                            required />
                        <br />
                        <button type="submit" class="btn btn-success">Sauvegarder</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>