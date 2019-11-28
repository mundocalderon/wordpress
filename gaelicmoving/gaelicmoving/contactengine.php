<?php

$EmailFrom = "gaelicmoving@gmail.com";
$EmailTo = "gaelicmoving@gmail.com";
$Subject = "Get a quote - site";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Start = Trim(stripslashes($_POST['Start']));
$End = Trim(stripslashes($_POST['End'])); 
$Date = Trim(stripslashes($_POST['Date']));
$Type = Trim(stripslashes($_POST['Type']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Start: ";
$Body .= $Start;
$Body .= "\n";
$Body .= "End: ";
$Body .= $End;
$Body .= "\n";
$Body .= "Date: ";
$Body .= $Date;
$Body .= "\n";
$Body .= "Type: ";
$Body .= $Type;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
