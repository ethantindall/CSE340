<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../css/small.css">
    <link rel="stylesheet" media="screen" href="../css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>PHP Motors Login</title>

</head>
<body>
    <div id="wrapper"> 
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
    </header>

    <nav>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/nav.php'; ?>
    </nav>

    <main>
        <h1>Register</h1>
        <form>

            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <button type="submit">Sign In</button>
        </form>
        <a href="register.php">Not a member yet?</a>

    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
<script src="js/main.js"></script>
</body>
</html>