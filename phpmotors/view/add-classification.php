<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE && $_SESSION['clientData']['clientLevel'] > 1) {
    $continue = "continue";
} else {
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
        <h1>Add A Classification</h1>  
        <?php if (isset($message)) {echo $message;} ?>        

        <form action="phpmotors/vehicles/index.php" method="post">
            <label>Enter a new classification:</label><br>    
            <input required type="text" name="classificationName"><br>
            <input type="submit" name="submit" id="subbtn" value="Submit Classification">
            <input type="hidden" name="action" value="addclassificationtodb">
        </form>
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
    <script src="js/main.js"></script>
</body>
</html>