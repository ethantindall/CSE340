<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE && $_SESSION['clientData']['clientLevel'] > 1) {
    $continue = "continue";
} else {
    header('Location: /phpmotors');
}
?><?php
//redirect if not logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === FALSE) {
    header('Location: /phpmotors');
}

// Build the classifications option list
$classifList = '<select name="classificationId" id="classificationId">';
$classifList .= "<option>Choose a Car Classification</option>";

foreach ($classifications as $classification) {
 $classifList .= "<option value='$classification[classificationId]'";
 if(isset($classificationId)){
  if($classification['classificationId'] === $classificationId){
   $classifList .= ' selected ';
  }
 } elseif(isset($invInfo['classificationId'])){
 if($classification['classificationId'] === $invInfo['classificationId']){
  $classifList .= ' selected ';
 }
}
$classifList .= ">$classification[classificationName]</option>";
}
$classifList .= '</select>';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title><?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ 
	 echo "Modify $invInfo[invMake] $invInfo[invModel]";} 
	elseif(isset($invMake) && isset($invModel)) { 
		echo "Modify $invMake $invModel"; }?> | PHP Motors</title>

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
    <h1><?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ 
	    echo "Modify $invInfo[invMake] $invInfo[invModel]";} 
        elseif(isset($invMake) && isset($invModel)) {echo "Modify$invMake $invModel"; }
    ?></h1>
        
        <?php if (isset($message)) {echo $message;} ?>        
        <p>Note: all fields are required.</p>
        <form action="../vehicles/index.php" method="post">   
            <label>Classification</label><br>
            <?php echo $classifList; ?><br>
            <label>Make</label><br>
            <input type="text" name="invMake" id="invMake" required <?php if(isset($invMake)){ echo "value='$invMake'"; } elseif(isset($invInfo['invMake'])) {echo "value='$invInfo[invMake]'"; }?>><br>
            <label>Model</label><br>
            <input type="text" name="invModel" id="invModel" required <?php if(isset($invModel)){ echo "value='$invModel'"; } elseif(isset($invInfo['invModel'])) {echo "value='$invInfo[invModel]'"; }?>><br>
            <label>Description</label><br>
            <textarea name="invDescription" id="invDescription" required><?php if(isset($invDescription)){ echo $invDescription; } elseif(isset($invInfo['invDescription'])) {echo $invInfo['invDescription']; }?></textarea> <br>           
            <label>Image Path</label><br>        
            <input required type="text" name="invImage" id="invImage" <?php if(isset($invImage)){echo "value='$invImage'";}  elseif(isset($invInfo['invImage'])) {echo "value='$invInfo[invImage]'"; }  ?> ><br>
            <label>Thumbnail Path</label><br>
            <input required type="text" name="invThumbnail" id="invThumbnail" <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";}  elseif(isset($invInfo['invThumbnail'])) {echo "value='$invInfo[invThumbnail]'"; } ?> ><br>
            <label>Price</label><br>        
            <input required type="text" name="invPrice" id="invPrice" <?php if(isset($invPrice)){echo "value='$invPrice'";}  elseif(isset($invInfo['invPrice'])) {echo "value='$invInfo[invPrice]'"; } ?> ><br>
            <label>Quantity in Stock</label><br>
            <input required type="number" name="invStock" id="invStock" <?php if(isset($invStock)){echo "value='$invStock'";}  elseif(isset($invInfo['invStock'])) {echo "value='$invInfo[invStock]'"; } ?> ><br>
            <label>Color</label><br>        
            <input required type="text" name="invColor" id="invColor" <?php if(isset($invColor)){echo "value='$invColor'";}  elseif(isset($invInfo['invColor'])) {echo "value='$invInfo[invColor]'"; } ?> ><br>

            <input type="submit" name="submit" value="Update Vehicle">
            <input type="hidden" name="invId" value="<?php if(isset($invInfo['invId'])){ echo $invInfo['invId'];} 
                                                           elseif(isset($invId)){ echo $invId; } ?>
                                                    ">
            <input type="hidden" name="action" value="updateVehicle">
        </form>
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
    </footer>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>