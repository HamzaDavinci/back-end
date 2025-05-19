<?php

require 'database.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die('Geen character ID opgegeven.');
}

// direct uit de juiste tabel selecteren
$statement = $conn->prepare("SELECT * FROM characters WHERE id = ?");
$statement->execute([$id]);
$character = $statement->fetch(PDO::FETCH_ASSOC);

if (!$character) {
    die('Character niet gevonden.');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - <?= $character['name'] ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet">
</head>
<body>
<header><h1><?= $character['name'] ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>

<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" alt="<?php echo$char['name']?> Afbeelding" src="resources/images/<?= $character['avatar'] ?? 'default.jpg' ?>">
            <div class="stats" style="background-color: <?php echo $character['color'];?>">
                <ul class="fa-ul">
                    <?php if (!empty($character['health'])): ?>
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $character['health'] ?></li>
                    <?php endif; ?>
                    <?php if (!empty($character['attack'])): ?>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $character['attack'] ?></li>
                    <?php endif; ?>
                    <?php if (!empty($character['defense'])): ?>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $character['defense'] ?></li>
                    <?php endif; ?>
                </ul>
                <ul class="gear">
                    <?php if (!empty($character['weapon'])): ?>
                        <li><b>Weapon</b>: <?= $character['weapon'] ?></li>
                    <?php endif; ?>
                    <?php if (!empty($character['armor'])): ?>
                        <li><b>Armor</b>: <?= $character['armor'] ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="right">
            <!-- note: nl2br is een function die een br plaats  -->
            <p><?= !empty($character['bio']) ? nl2br($character['bio']) : 'Geen beschrijving.' ?></p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
