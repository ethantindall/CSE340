<?php



$performance = filter_input(INPUT_POST, 'performance', FILTER_SANITIZE_STRING);
$fname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$lname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
$studentId = filter_input(INPUT_POST, 'student_id', FILTER_SANITIZE_STRING);

if(isset($_POST['first_name_2'])) {$fname2 = filter_input(INPUT_POST, 'first_name_2', FILTER_SANITIZE_STRING);}
if(isset($_POST['last_name_2'])) {$lname2 = filter_input(INPUT_POST, 'last_name_2', FILTER_SANITIZE_STRING);}
if(isset($_POST['student_id_2'])) {$studentId2 = filter_input(INPUT_POST, 'student_id_2', FILTER_SANITIZE_STRING);}

$skill = filter_input(INPUT_POST, 'skill', FILTER_SANITIZE_STRING);
$instrument = filter_input(INPUT_POST, 'instrument', FILTER_SANITIZE_STRING);
$location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
$room = filter_input(INPUT_POST, 'room', FILTER_SANITIZE_STRING);
$time = filter_input(INPUT_POST, 'time_slot', FILTER_SANITIZE_STRING);

if (empty($performance) || empty($fname) || empty($lname) || empty($studentId) || empty($skill) || empty($instrument) || empty($location) || empty($room) || empty($time)) {
    $_SESSION["message"] = "* Please enter all the required fields";
    include 'assign13html.php';
    exit;
}
$_SESSION['userdata'] = "<td>" . $fname . " " . $lname . 
                        "</td><td>" . $instrument . 
                        "</td><td>"  .$performance . 
                        "</td><td>" . $skill . 
                        "</td><td>" . $location . 
                        "</td><td>" . $room . 
                        "</td><td>" . $studentId .  
                        "</td><td>" . $time  ."</td>";





$myfile = fopen("data/data.txt", "a");
fwrite($myfile, $_SESSION['userdata'] ."\n");
fclose($myfile);



include 'assign13html.php';

?>