<?php $vragen = [];
$errors = [];
$isValid = true; 
$toonVerhaal = false;

foreach ($velden as $veld => $label) {
    $vragen[$veld] = "";
    $errors[$veld] = "";
}

// Als het formulier is verstuurd
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($velden as $veld => $label) {

        if (empty($_POST[$veld])) {
            $errors[$veld] = "Verplicht veld";
            $isValid = false;

        } else {
            $vragen[$veld] = htmlspecialchars($_POST[$veld], ENT_QUOTES, 'UTF-8');
        }
    }

    if ($isValid) {
        $toonVerhaal = true;
    }
}

?>