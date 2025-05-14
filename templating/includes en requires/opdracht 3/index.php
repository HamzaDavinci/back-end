<?php 

require ('content.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>includes en requires</title>
</head>
<body>
    
<?php echo("$naam<br>")?>
<?php echo("$achternaam <br>")?>

<?php echo("$lorem <br>")?>

<?php 

for ($x = 1; $x <= 10; $x++) {
    echo("$x");
    echo("<img src=$image><br>");
}
?>


</body>
</html>