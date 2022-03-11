<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Registrer poeng</title>
</head>
<body>
  <h2>High score i databasen</h2>

<?php
if(isset($_POST['submit'])) {
  $poeng = $_POST['poeng'];
  $initialer = $_POST['intialer'];

  //Opprette kobling
	$kobling = new mysqli('localhost', 'root', '', 'mydb');
		
		//Sjekk om kobling virker
		if($kobling->connect_error) {
			die("Noe gikk galt: " . $kobling->connect_error);
		}
		
		//Angi UTF-8 som tegnsett
		$kobling->set_charset("utf8");	
	
		$sql = "INSERT INTO high_score (initialer, poeng) VALUES ('$initialer', '$poeng')";
	
		if($kobling->query($sql)) {
			echo "Spørringen $sql ble gjennomført. ";
		}else{
			echo "Noe gikk galt med spørringen $sql ($kobling->error).";
		}
    } 
?>

</body>
</html>
