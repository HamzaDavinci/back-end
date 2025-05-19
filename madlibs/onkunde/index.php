<?php

$velden = [
    "vraag1" => "Wat zou je graag willen kunnen?",
    "vraag2" => "Met welk persoon kun je goed opschieten",
    "vraag3" => "Wat is je favoriete getal",
    "vraag4" => "Wat heb je altijd bij je als je op vakantie gaat?",
    "vraag5" => "Wat is je beste persoonlijke eigenschap?",
    "vraag6" => "Wat is je slechtste persoonlijke eigenschap?",
    "vraag7" => "Wat is het ergste dat je kan overkomen?"
];

require '../validator.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>onkunde</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php if (!$toonVerhaal): ?>
<form action="index.php" method="post">
    <ul>
        <li><a href="http://localhost/madlibs/paniek/">paniek</a></li>
        <li><a href="index.php">onkunde</a></li>
    </ul>

    <h1>Onkunde</h1>

    <?php require '../velden.php' ?>

    <input type="submit" value="Maak verhaal">
</form>
<?php else: ?>
<div class="story">
    <h1>Onkunde.</h1>
    <p>
        Er zijn veel mensen die niet kunnen <strong><?= $vragen['vraag1'] ?></strong>.<br>

        Neem nou <strong><?= $vragen['vraag2'] ?></strong>.<br>

        Zelfs met de hulp van een <strong><?= $vragen['vraag4'] ?></strong> of zelfs <strong><?= $vragen['vraag3'] ?></strong> kan <strong><?= $vragen['vraag2'] ?></strong> niet <strong><?= $vragen['vraag1'] ?></strong>.<br>

        Dat heeft niet te maken met een gebrek aan <strong><?= $vragen['vraag5'] ?></strong>, maar met een te veel aan <strong><?= $vragen['vraag6'] ?></strong>.<br>

        Te veel aan <strong><?= $vragen['vraag6'] ?></strong> leidt tot <strong><?= $vragen['vraag7'] ?></strong> en dat is niet goed als je wilt <strong><?= $vragen['vraag1'] ?></strong>.<br>
        
        Helaas voor <strong><?= $vragen['vraag2'] ?></strong>.
    </p>
</div>
<?php endif; ?>

    <div class="copyright">Gemaakt door Hamza - © <?= date("Y") ?></div>
</body>
</html>