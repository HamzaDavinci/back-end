
<?php
  // Haal de pagina uit de URL
  $page = isset($_GET['page']) ? $_GET['page'] : 'attack_on_titan';

  // Genereer het juiste afbeeldingspad
  $imagePath = "images/" . $page . ".png";

  // Check of het bestand echt bestaat, anders fallback
  if (!file_exists($imagePath)) {
    $imagePath = "images/attack_on_titan.png";
  }
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $page ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
      <?php include 'includes/header.php';?>

    <main>
    <?php
      // <!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
      if ($page === 'attack_on_titan') {
          include 'pages/attack_on_titan.php';
      } elseif ($page === 'reiner') {
          include 'pages/reiner.php';
      } elseif ($page === 'hange') {
          include 'pages/hange.php';
      } elseif ($page === 'moblit') {
          include 'pages/moblit.php';
      } else {
          echo "<p>Pagina niet gevonden.</p>";
      }
    ?>
  </main>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
      <?php include 'includes/footer.php';?>

</body>
</html>