<?php
// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
// Get the vehicle model for use as needed
require_once '../model/vehicles-model.php';


// Get the array of classifications
$classifications = getClassifications();
//var_dump($classifications);
//	exit;


// Build a navigation bar using the $classifications array
$navList = '<ul>';
$navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
 $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
}
$navList .= '</ul>';


//Build a drop down list using the $classifications array
$dropList = '<select>';
foreach ($classifications as $classification) {
    $dropList .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>";
}
$dropList .= "</select>";



$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action) {
     case 'addclass':
        $newClassification = filter_input(INPUT_POST, 'classificationName');
        if(empty($newClassification)) {
            $message = '<p>Please provide the new class name.</p>';
            include '/phpmotors/view/add-classificaton.php';
            exit; 
        }
        $newClass = addClassification($newClassification);
        if ($newClass === 1) {
            $message = '<p>Thanks for adding your classification!</p>';
            include '../view/vehicle-man.php';
            exit;
        }
        else {
            $message = '<p>Sorry, the classification registration failed</p>';
            include '../view/add-classification.php';
        }


    case 'addvehicle':
        $invMake = filter_input(INPUT_POST, 'invMake');
        $invModel = filter_input(INPUT_POST, 'invModel');
        $invDescription = filter_input(INPUT_POST, 'invDescription');
        $invImage = filter_input(INPUT_POST, 'imvImage');
        $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
        $invPrice = filter_input(INPUT_POST, 'invPrice');
        $invStock = filter_input(INPUT_POST, 'invStock');
        $invColor = filter_input(INPUT_POST, 'invColor');
        $classificationId = filter_input(INPUT_POST, 'classificationId');

        if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)){
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/add-vehicle.php';
            exit; 
        }
        // Send the data to the model
        $newVehicle = addVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);

        // Check and report the result
        if($newVehicle === 1){
            $message = "<p>Thanks for addding your vehicle.</p>";
            include '../view/vehicle-man.php';
            exit;
        } else {
            $message = "<p>Sorry, but the vehicle registration failed. Please try again.</p>";
            include '../view/add-vehicle.php';
            exit;
        }
    default:
        include 'view/vehicle-man.php';
 }