<?php
$page = $_GET['page'] ?? 'home';
$pagePath = "pages/{$page}.php";
$stylePath = "styles/{$page}.css";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($page)?></title>
    <?php 
    echo "<link rel='stylesheet'  href='styles/header.css'></link>" ;
    echo "<link rel='stylesheet'  href='$stylePath'></link>" ;
    echo "<link rel='stylesheet'  href='styles/footer.css'></link>" ;
    ?>
</head>
<body>
    <?php
    include "header.php";

    include $pagePath;

    include "footer.php";
    ?>
</body>
</html>