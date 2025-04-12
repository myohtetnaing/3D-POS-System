<?php 
    require './link/css-link.php'; 
    require './link/js-link.php'; 
    require './access_php/login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title> 
    <!-- CSS Link -->
    <?php require './access_php/custom-css.php'; index(); ?>
    <?php IndexPageCssLink(); ?>
   
    
</head>   
<body>   
    <?php require './view/index.php'; ?> 
    <?php IndexPageJsLink(); ?>
</body>
</html>