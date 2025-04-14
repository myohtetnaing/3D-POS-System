<?php 
    require './link/css-link.php'; 
    require './link/js-link.php'; 
    require './config/login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index-page</title> 
    <!-- CSS Link -->
    <?php require './access_php/custom-css.php'; index(); ?>
    <!-- css link that is use php -->
    <?php IndexPageCssLink(); ?>
    
</head>   
<body>   
    <?php require './views/index.php'; ?> 

    <!-- js script link that is use php -->
    <?php IndexPageJsLink(); ?>
</body>
</html>