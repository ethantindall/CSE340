<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === FALSE) {
    header('Location: /phpmotors');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>PHP Motors Add Classification</title>

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
        <h1><?php echo $clientData['clientFirstname']; ?></h1>
        <ul>
            <li>First Name: <?php echo $clientData['clientFirstname']; ?></li>
            <li>Last Name: <?php echo $clientData['clientLastname']; ?></li>
            <li>Email: <?php echo $clientData['clientEmail']; ?></li>
        </ul>
        <?php if ($clientData['clientLevel'] > 1) {echo '<p><a href="/phpmotors/vehicles">Vehicle Management</a></p>';} ?> 

<p>You are logged in.</p>  

    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>