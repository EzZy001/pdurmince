<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PD Urmince</title>
</head>

<?php 
    include "parts/header.php";
?>

<body>

<?php 
    $json_data = file_get_contents("data/data.json");
    $data = json_decode($json_data, true);
    
    foreach ($data as $banner => $details) {
        $url = $details['url'];
        $redirectUrl = $details['url'];
        echo '<a href="' . $redirectUrl . '" onclick="redirectToUrl(\'' . $redirectUrl . '\')">';
        echo '<img src="' . $url . '">';
        echo '</a>';
    }
?>

<?php 
    include "parts/menu.php";
?>
</body>

<?php
    include "parts/footer.php";
?>
</html>