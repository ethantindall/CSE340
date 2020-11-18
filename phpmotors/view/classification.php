<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../css/small.css">
    <link rel="stylesheet" media="screen" href="../css/large.css">
    <link rel="stylesheet" media="screen" href="../css/inventory.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title><?php echo $classificationName; ?> vehicles | PHP Motors, Inc.</title>

</head>
<body>
    <div id="wrapper"> 
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
    </header>

    <nav>
        <?php echo $navList; ?>
    </nav>

    <main>
        <h1><?php echo $classificationName; ?> vehicles</h1>
        <?php if(isset($message)){echo $message; } ?>
        <?php if(isset($vehicleDisplay)){echo $vehicleDisplay;} ?>
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
<script src="../js/main.js"></script>
</body>
</html>