<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<link href="css/nav.css">
</link>

<?php echo validation_errors(); ?>

<?php echo form_open('Connexion/form_co'); ?>

<body>
    <div class="login-form">

        <h2 class="text-center">Connexion</h2>
        <div class="form-group">
            <input type="email" name="login" class="form-control" placeholder="email" required="required"
                autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required"
                autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>
        </form>
        <p class="text-center"><a href="../Inscription/form_ins">Inscription</a></p>
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