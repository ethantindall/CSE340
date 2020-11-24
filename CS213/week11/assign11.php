<?php

$_SESSION['cost'] = 0;

if(isset($_POST['item_0'])) {$oneBook = $_POST['item_0'];}
if(isset($_POST['item_1'])) {$twoBooks = $_POST['item_1'];}
if(isset($_POST['item_2'])) {$threeBooks = $_POST['item_2'];}
if(isset($_POST['item_3'])) {$fourBooks = $_POST['item_3'];}

$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$telephone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


$cardType = filter_input(INPUT_POST, 'card', FILTER_SANITIZE_STRING);
$cardNumber = filter_input(INPUT_POST, 'credit_card', FILTER_SANITIZE_STRING);
$expDate = filter_input(INPUT_POST, 'exp_date', FILTER_SANITIZE_NUMBER_INT);

include 'confirmation.php'
?>