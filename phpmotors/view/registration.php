<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>PHP Motors Register</title>

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
        <p>All fields are required.</p>



        <?php if (isset($message)) {echo $message;} ?>        

        <form method="post" action="/phpmotors/accounts/index.php">
            <label>First Name</label><br>
            <input name="clientFirstname" id="clientFirstname" type="text"><br>
            <label>Last Name</label><br>
            <input type="text" name="clientLastname" id="lname"><br>
            <label>Email</label><br>
            <input type="email" name="clientEmail" id="email"><br>
            <label>Password</label><br>
            <input type="password" name="clientPassword" id="password"><br>
            <input type="submit" name="submit" id="regbtn" value="Register">
            <input type="hidden" name="action" value="register">

        </form>

    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
<script src="js/main.js"></script>
</body>
</html>