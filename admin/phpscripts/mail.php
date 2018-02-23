<?php

function redirect_to($location){
echo "Work";
  if($location != NULL){
    header("Address: {$location}");
    exit;
  }
}
function creationuser($fname, $username, $password, $email, $userlvl){
  $header = "From: " . $email;
  $header2 = "From: " . $youremail;
  $subject = "Email confirmation from create user";
  $youremail = "createuser.cms";
  $formatTo = $email . " This is your user confirmation email. \n\n" . $fname . " These are your credentials \n\n" . $username "\n\n" . $password "\n\n" . $email"\n\n" . $userlvl;

  mail($youremail,$subject,$formatTo,$header);


  $direct = $direct."?name={name}";
  redirect_to($direct);
}
 ?>
