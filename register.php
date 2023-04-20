<?php

function validateText($fieldName){
  return isset($_POST[$fieldName]) && !empty(trim($_POST[$fieldName])) ? $_POST[$fieldName] : false;
}

function validateEmail($fieldName){
  return filter_var($_POST[$fieldName], FILTER_VALIDATE_EMAIL) ? $_POST[$fieldName] : false;
}

function validateCheckbox($fieldName){
  return isset($_POST[$fieldName]) ? $_POST[$fieldName] : false;
}

 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $secondname = validateText('secondname');
  $email = validateEmail('email');
  $checkbox = validateText('checkbox');
  $fistname = validateText('firstname');


$errors = [];

if($fistname == false){
  $errors[] = 'firstname must be filled';
}

if($secondname == false){
  $errors[] = 'secondname must be filled';
}

if($email == false){
  $errors[] = 'email must be filled';
}

if($checkbox == false){
  $errors[] = 'checkbox must be selected';
}

if(!empty($errors)){
  foreach($errors as $error){
    echo $error . '<br />';
  };
}

}

?>