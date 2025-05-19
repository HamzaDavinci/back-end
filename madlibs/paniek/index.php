<?php

$velden = [
    "vraag1" => "Welk dier zou je nooit als huisdier willen hebben",
    "vraag2" => "Wie is de belangrijkste persoon in je leven",
    "vraag3" => "In welk land zou je graag willen wonen",
    "vraag4" => "Wat doe je als je je verveelt",
    "vraag5" => "Met welk speelgoed speelde je als kind het meest",
    "vraag6" => "Bij welke docent spijbel je het liefst",
    "vraag7" => "Als je €100.000,- had, wat zou je dan kopen",
    "vraag8" => "Wat is je favoriete bezigheid"
];

require '../validator.php';

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Er heerst paniek</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<?php if (!$toonVerhaal): ?>
    <form action="index.php" method="post">
        <ul>
            <li><a href="index.php">paniek</a></li>
            <li><a href="http://localhost/madlibs/onkunde/">onkunde</a></li>
        </ul>

        <h1>Er heerst paniek...</h1>

        <?php require '../velden.php' ?>

        <input type="submit" value="Maak verhaal">
    </form>

<?php else: ?>
    <div class="story">
        <h1>Er heerst paniek...</h1>
        <p>
            Er heerst paniek in het koninkrijk <strong><?= $vragen['vraag3'] ?></strong>, Koning <strong><?= $vragen['vraag6'] ?></strong> is ten einde raad.<br>
            Als koning <strong><?= $vragen['vraag6'] ?></strong> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <strong><?= $vragen['vraag2'] ?></strong>.<br><br>

            "<strong><?= $vragen['vraag2'] ?></strong>! Het is een ramp! Het is een schande!"<br><br>

            "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>

            "Mijn <strong><?= $vragen['vraag1'] ?></strong> is verdwenen! Zo maar, zonder waarschuwing. En ik had net een <strong><?= $vragen['vraag5'] ?></strong> voor hem gekocht!"<br><br>

            "Majesteit, uw <strong><?= $vragen['vraag1'] ?></strong> komt vast vanzelf weer terug?"<br><br>

            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <strong><?= $vragen['vraag8'] ?></strong> leren?"<br><br>

            "Maar Sire, daar kunt u toch uw <strong><?= $vragen['vraag7'] ?></strong> voor gebruiken."<br><br>

            "<strong><?= $vragen['vraag2'] ?></strong>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>

            "<strong><?= $vragen['vraag4'] ?></strong>, Sire."
        </p>
    </div>
<?php endif; ?>

<div class="copyright">Gemaakt door Hamza - © <?= date("Y") ?></div>

</body>
</html>
