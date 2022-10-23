!
<?php

$retour = mail("pfoure@gaming.bs", "Essai", "Je fais du php wow", "");
if ($retour) {
    echo "<p>L'email a bien été envoyé.</p>";
}


?>