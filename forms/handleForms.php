<?php

    $naam = htmlspecialchars($_POST["naam"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');

    echo "Naam: $naam<br>";
    echo "Je email is: $email";

?>