<body>
    <div class="login-form">
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
        ?>
        <div class="alert alert-success">
            <strong>Succès</strong> inscription réussie !
        </div>
        <?php
                    break;

                case 'password':
                ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> mot de passe différent
        </div>
        <?php
                    break;

                case 'email':
                ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> email non valide
        </div>
        <?php
                    break;

                case 'email_length':
                ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> email trop long
        </div>
        <?php
                    break;

                case 'pseudo_length':
                ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> pseudo trop long
        </div>
        <?php
                case 'already':
                ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> compte deja existant
        </div>
        <?php

            }
        }
        ?>

        <form action="inscription_traitement.php" method="post">
            <h2 class="text-center">Inscription</h2>
            <div class="form-group">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="Nom" required="required"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <input title="Entrez votre date de naissance" type="date" name="ddn" class="form-control"
                    placeholder="Date de naissance" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required"
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe"
                        required="required" autocomplete="off">
                    <div class="password-icon">
                        <i data-feather="eye"></i>
                        <i data-feather="eye-off"></i>
                    </div>
                </label>
            </div>
            <div class="form-group">
                <input type="password" name="password_retype" class="form-control"
                    placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Inscription</button>
            </div>
        </form>
        <p class="text-center"><a href="../Connexion/form_co">Retour à la connexion</a></p>
    </div>

    <style>
    /* Attention ! Ce css est dédié à cette page, si vous souhaitez l'utiliser, 
        ne l'utilisez que par morceaux ou sur les éléménts prédéfinis, n'hésitez pas à le retirer si vous n'en avez plus besoin. */



    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }

    label {
        position: relative;
        display: flex !important;
    }

    input:focus {
        border-color: grey;
    }

    label .password-icon {
        display: flex;
        align-items: center;
        position: absolute;
        top: 55%;
        right: 20px;
        transform: translateY(-50%);
        width: 20px;
        color: grey;
        transition: all 0.2s ease 0s;
    }

    label .password-icon:hover {
        cursor: pointer;
        color: #ff4754;
    }

    label .password-icon .feather-eye-off {
        display: none;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .text-center {
        text-align: center !important;
    }

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .h2,
    h2 {
        font-size: 2rem;
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
    }

    body {
        font-family: -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            Roboto,
            "Helvetica Neue",
            Arial,
            "Noto Sans",
            sans-serif,
            "Apple Color Emoji",
            "Segoe UI Emoji",
            "Segoe UI Symbol",
            "Noto Color Emoji";
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
        border: none;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
    </style>
</body>