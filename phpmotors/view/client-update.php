<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === FALSE) {
    header('Location: /phpmotors');
}
$clientFirstname = $_SESSION['clientData']['clientFirstname'];
$clientLastname = $_SESSION['clientData']['clientLastname'];
$clientEmail = $_SESSION['clientData']['clientEmail'];
$clientId = $_SESSION['clientData']['clientId'];


echo $clientId;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>PHP Motors Client Update</title>

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
        <h1>Update Account Information</h1>
        <?php if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];} ?>
        <h2>Client Information</h2>
        <form method="post" action="/phpmotors/accounts/index.php">
            <label>First Name</label><br>
            <input required type="text" name="clientFirstname" id="clientFirstname" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> ><br>
            <label>Last Name</label><br>
            <input required type="text" name="clientLastname" id="lname" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?> ><br>
            <label>Email</label><br>
            <input required type="email" name="clientEmail" id="email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> ><br>
            <input type="hidden" name="clientId" value="<?php if(isset($clientInfo['clientId'])){ echo $clientInfo['clientId'];} 
                                                           elseif(isset($clientId)){ echo $clientId; } ?>">
            <input type="submit" name="submit" value="Update Info">
            <input type="hidden" name="action" value="updateClient">
        </form>

        <h2>Update Password</h2>
        <?php if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];} ?> 
        <form method="post" action="/phpmotors/accounts/index.php">
            <p>This change will update your password.</p><br>
            <span>(Must be at least 8 characters and have 1 uppercase letter number and special character.)</span><br>
            <input required type="password" name="clientPassword" id="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br>
            <input type="hidden" name="clientId" value="<?php if(isset($clientInfo['clientId'])){ echo $clientInfo['clientId'];} 
                                                           elseif(isset($clientId)){ echo $clientId; } ?>">
            <input type="submit" name="submit" value="Update Password">
            <input type="hidden" name="action" value="updatePassword">
        </form>

    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>
<?php unset($_SESSION['message']); ?>
