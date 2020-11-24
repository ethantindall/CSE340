<?php 

 $confirm = filter_input(INPUT_POST, 'confirm', FILTER_SANITIZE_STRING);

 
 
switch ($confirm) {
    case 'Yes. Confirm Order.':
        $_SESSION['message'] = "Order Confirmed!";
        include 'summary.php';
        break;
    case 'No. Cancel Order.':
        $_SESSION['message'] = "Order Cancelled";
        include 'summary.php';
        break;
    default:
        $_SESSION['message'] = "There was an error. Please try again.";
        echo $confirm;
        include 'summary.php';
        break; 
}





?>