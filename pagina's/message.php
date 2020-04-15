<div class="col-12">
    <?php
    switch ($_GET["alert"]) {
        case 'no-email':
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">Vul je gegevens in!</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'emailexists':
            echo '<div style="text-align:center"class="alert alert-danger mt-1" role="alert">Uw ingevulde e-mail adres bestaat al.</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'register-success':
            echo '<div style="text-align:center"class="alert alert-success mt-1" role="alert">U bent succesvol geregistreerd. U ontvangt een activatie mail voor het
            voltooien van het registeren.</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'register-error':
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">Het registeren is niet voltooid. Probeer het nogmaals.</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'hacker-alert':
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">JE KOMT ER NIET DOORHEEN!</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'password-empty':
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">Password empty</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'NoMatch-Password':
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">no match password</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'login-succesvol':
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">Je bent ingelogd.</div>';
            header("refresh: 3; url=./index.php?content=home");
            break;

        case 'login-error':
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">Je bent niet ingelogd.</div>';
            header("refresh: 3; url=./index.php?content=registreren");
            break;

        case 'loguit':
            echo '<div style="text-align:center"class="alert alert-success mt-1" role="alert">Je bent uitgelogt</div>';
            header("refresh: 3; url=./index.php?content=home");
            break;
        case 'auht-error':
            echo '<div style="text-align:center"class="alert alert-warning mt-1" role="alert">je hebt de bevoegtheid niet</div>';
            header("refresh: 3; url=./index.php?content=home");
            break;
        case 'auht-error-user':
            echo '<div style="text-align:center"class="alert alert-warning mt-1" role="alert">je hebt de bevoegtheid niet als deze gebruiker</div>';
            header("refresh: 3; url=./index.php?content=home");
            break;


        default:
            header("Location: ./index.php?content=home");
            break;
    }

    ?>