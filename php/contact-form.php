<?php

  if(isset($_post['submit'])) {
    $name = $_POST['name'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];
	
    $mailTo = "vineetchaudhary87@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "you have received an e-mail from ".$name.".\n\n".$message;
	
	mail($mailTo, $txt, $headers);
	header("Location: index.php?mailsend");
  }
		
?>