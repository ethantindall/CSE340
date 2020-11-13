<?php
if($_SESSION['clientData']['clientLevel'] < 2){
 header('location: /phpmotors/');
 exit;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title><?php if(isset($invInfo['invMake'])){ 
	echo "Delete $invInfo[invMake] $invInfo[invModel]";} ?> | PHP Motors</title>

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
  <h1><?php if(isset($invInfo['invMake'])){ 
	echo "Delete $invInfo[invMake] $invInfo[invModel]";} ?> | PHP Motors</h1>
        
        <?php if (isset($message)) {echo $message;} ?>        
        <p>Confirm Vehicle Deletion. The delete is permanent.</p>
        <form method="post" action="/phpmotors/vehicles/">
            <fieldset>
                <label for="invMake">Vehicle Make</label>
                <input type="text" readonly name="invMake" id="invMake" <?php
            if(isset($invInfo['invMake'])) {echo "value='$invInfo[invMake]'"; }?>>

                <label for="invModel">Vehicle Model</label>
                <input type="text" readonly name="invModel" id="invModel" <?php
            if(isset($invInfo['invModel'])) {echo "value='$invInfo[invModel]'"; }?>>

                <label for="invDescription">Vehicle Description</label>
                <textarea name="invDescription" readonly id="invDescription"><?php
            if(isset($invInfo['invDescription'])) {echo $invInfo['invDescription']; }
            ?></textarea>

            <input type="submit" class="regbtn" name="submit" value="Delete Vehicle">

                <input type="hidden" name="action" value="deleteVehicle">
                <input type="hidden" name="invId" value="<?php if(isset($invInfo['invId'])){
            echo $invInfo['invId'];} ?>">

            </fieldset>
        </form>
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>