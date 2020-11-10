<img id="logo" src="/phpmotors/images/site/logo.png" alt="Company Logo">

<?php if(isset($cookieFirstname)){
 echo "<span>Welcome $cookieFirstname</span>";
} ?>

<?php if(isset($_SESSION['loggedin'])) {
        if ($_SESSION['loggedin'] === TRUE) {echo '<a id="acctLink" href="/phpmotors/accounts/index.php/?action=Logout">Logout</a>';}
 } else {echo '<a id="acctLink" href="/phpmotors/accounts/index.php/?action=login-page">My Account</a>';
        } ?> 

