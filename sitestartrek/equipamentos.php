<?php 
    $title = "Exercicio Fausto"
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="icon" type="image/svg+xml" href="/vite.svg" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\navbar.css">
    <link rel="stylesheet" href="assets\css\menu.css">
    <link rel="stylesheet" href="assets\css\footer.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <div class="body-background">
        <?php 
            include __DIR__ . "/includes/header.php"
        ?>

        <h3>Equipamentos</h3>
        
        <?php 
            include __DIR__ . "/includes/footer.php"
        ?>
    </div>
</body>

</html>