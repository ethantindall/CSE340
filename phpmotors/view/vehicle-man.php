<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /phpmotors/');
    exit;}
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../css/small.css">
    <link rel="stylesheet" media="screen" href="../css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>PHP Motors Vehicle Management</title>

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
        <h1>Vehicle Management</h1>
        <ul>
            <li><a href="/phpmotors/vehicles/index.php/?action=addclassification">Add Classification</a></li>
            <li><a href="/phpmotors/vehicles/index.php/?action=addvehicle">Add Vehicle</a></li>
        </ul>

        <?php
            if (isset($message)) { 
                echo $message; 
            } 
            if (isset($classificationList)) { 
                echo '<h2>Vehicles By Classification</h2>'; 
                echo '<p>Choose a classification to see those vehicles</p>'; 
                echo $classificationList; 
            }
        ?>
        <noscript>
            <p><strong>JavaScript Must Be Enabled to Use this Page.</strong></p>
        </noscript>
        <table id="inventoryDisplay"></table>

    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
<script src="../js/inventory.js"></script>
<script src="../js/main.js"></script>
</body>
</html>
<?php unset($_SESSION['message']); ?>
