<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD Urmince</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/login_box.css">
</head>
<body>
    

    <div class= "menu">
        <div class="menu_item"><a href="index.php">Domov</a></div>
        <div class="menu_item"><a href="about.php">O nás</a></div>
        <div class="menu_item"><a href="contact.php">Kontakt</a></div>
        <div class="menu_item"><a href="mechanizacia.php">Mechanizácia</a></div>
        <div class="menu_item"><a href="vyroba.php">Rastlinná výroba</a></div>
    </div>

        <div class="box">
            Prihlásiť sa
        </div>

    <?php
        include("script/login_script.php");
    ?>
</body>

<?php
    include("parts/footer.php");
?>
</html>