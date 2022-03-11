<?php 	
		//Opprette kobling
		$kobling = new mysqli('localhost', 'root', '', 'mydb');
		
		//Sjekk om kobling virker
		if($kobling->connect_error) {
			die("Noe gikk galt: " . $kobling->connect_error);
		}
		
		//Angi UTF-8 som tegnsett
		$kobling->set_charset("utf8");
		
		$sql = "SELECT * FROM high_score";
		$resultat = $kobling->query($sql);
		
		//Skriver ut innholdet i tabellen
		while($rad = $resultat->fetch_assoc()) {
			$initialer = $rad["initialer"];
			$poeng = $rad["poeng"];
			
						
			echo $initialer . " ";
			echo $poeng;
			echo "<br>";
		}
	?>