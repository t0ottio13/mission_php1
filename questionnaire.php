<?php

// var_dump($_POST);
// exit();

$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];
$question5 = $_POST["question5"];
$advise_text = $_POST["advise_text"];
$adviser_name = $_POST["adviser_name"];

$write_data ="{$adviser_name} {$question1} {$question2} {$question3} {$question4} {$question5} {$advise_text}\n";
// var_dump($write_data);
// exit();
$file = fopen('data/questionnaire_data.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header('Location:thank_you.php');


?>