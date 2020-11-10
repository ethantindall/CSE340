<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="css/small.css">
    <link rel="stylesheet" media="screen" href="css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>PHP Motors Homepage</title>

</head>
<body>
    <div id="wrapper"> 
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
        <a id="acctLink" href="/phpmotors/accounts/index.php/?action=login-page">My Account</a>
    </header>

    <nav>
        <?php echo $navList; ?>
    </nav>

    <main>
        <h1>Content Title Here</h1>
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
<script src="js/main.js"></script>
</body>
</html>