<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <title>Week 10 Page</title>
</head>
<body>
    <header>
    <img src="dark-wood.png" alt="banner">

        <h1>The Bloated Bookstore</h1>
        <p>Ye olde HQ for all things book!</p>
    </header>
    <main>
        <h2><?php echo $_SESSION["message"]; ?></h2>
  </main>
    <footer>
        <p>&copy; Ethan Tindall 2020</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>