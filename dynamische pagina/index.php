<?php

require 'database.php';

// Karakters ophalen
$sql = "SELECT * FROM characters ORDER BY name ASC";
$characters = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$aantalCharacters = count($characters);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet">
</head>
<body>
<header><h1>Alle <?php echo($aantalCharacters) ?> characters uit de database</h1></header>
<div id="container">
    <?php foreach ($characters as $char): ?>
        <a class="item" href="character.php?id=<?= $char['id'] ?? '' ?>">
            <div class="left">
                <img class="avatar" alt="<?php echo$char['name']?> Afbeelding" src="resources/images/<?= $char['avatar'] ?? 'default.jpg' ?>">
            </div>
            <div class="right">
                <h2><?= $char['name'] ?? 'Onbekend' ?></h2>
                <div class="stats">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $char['health'] ?></li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $char['attack'] ?></li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $char['defense'] ?></li>
                    </ul>
                </div>
            </div>
            <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
        </a>
    <?php endforeach; ?>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
