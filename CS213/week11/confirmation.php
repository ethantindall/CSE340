<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


    <title>Week 10 Page</title>
</head>
<body onload="">
    <header>
    <img src="dark-wood.png" alt="banner">

        <h1>The Bloated Bookstore</h1>
        <p>Ye olde HQ for all things book!</p>
    </header>
    <main>
        <h2>Confirm Order</h2>
        <p>Name: <?php echo $firstName; echo " "; echo $lastName; ?></p>
        <p>Address: <?php echo $address; ?></p>
        <p>Telephone: <?php echo $telephone; ?></p>
        <p>Items in Cart:</p>
        <ul>
            <?php if(isset($_POST['item_0'])) {echo "<li>$oneBook</li>"; $_SESSION['cost'] += 5;} ?>
            <?php if(isset($_POST['item_1'])) {echo "<li>$twoBooks</li>"; $_SESSION['cost'] += 9;} ?>
            <?php if(isset($_POST['item_2'])) {echo "<li>$threeBooks</li>"; $_SESSION['cost'] += 12;} ?>
            <?php if(isset($_POST['item_3'])) {echo "<li>$fourBooks</li>"; $_SESSION['cost'] += 15;} ?>    
        </ul>

        <p>Total Cost: $<?php echo $_SESSION['cost']; ?></p>
        <p>Credit Card Type: <?php echo $cardType; ?></p>
        <p>Card Expiration Date: <?php echo $expDate; ?></p>

        <form method="POST" action="assign11_a.php">
            <label>Is this information correct?</label>
            <input type="submit" name="confirm" value="Yes. Confirm Order."><br/>
            <input type="submit" name="confirm" value="No. Cancel Order."><br/>
        </form>

  </main>
    <footer>
        <p>&copy; Ethan Tindall 2020</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>