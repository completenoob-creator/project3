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
            echo '<div style="text-align:center"class="alert alert-info mt-1" role="alert">JE KOMT ER NIET DOORHEEN!.</div>';
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

                
        default:
            header("Location: ./index.php?content=home");
            break;
    }

    ?>