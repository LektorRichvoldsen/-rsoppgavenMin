<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Klikkespill</title>
</head>

<body>
    <div id="container">
        <div class="item">

            <button id="klikkeknapp">+1</button>

            <h3 id="utskrift">Klikk på knappen for å begynne.</h3>
            <button id="oppgradering1">+1 (koster 100 poeng)</button>
            <button id="oppgradering2">+10 (koster 1000 poeng)</button>

            <div id="inputForm">
                <form method="post" action="lagrePoeng.php">
                    <input type="hidden" id="poeng" name="poeng" value="0">
                    <input type="text" name="intialer">
                    <input type="submit" value="Nå er jeg lei, lagre poeng" name="submit">
                </form>
            </div>
        </div>
        <div class="item">
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
        </div>
    </div>

    </div>
    <script src="js/script.js"></script>
</body>

</html>