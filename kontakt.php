<!doctype html>
<html>
<head>
<body>
	<?php

		if($_POST['von']!="" and $_POST['mail']!="" and $_POST['betreff']!="" and $_POST['nachricht']!=""){	
		$empf = "mika.rottlaender@icloud.com";
		$betreff = $_POST ['betreff'];
		$from = "From: ";
		$from .= $_POST['von'];
		$from .= " <";
		$from .= $_POST['mail'];
		$from .= ">\n";
		$from .= "Reply-To: ";
		$from .= $_POST['mail'];
		$from .= "\n";
		$text = $_POST['nachricht'];

		mail($empf, $betreff, $text, $from);
		echo "Vielen Dank";
	} else {
		echo "Fehler";
	}
	?>


</body>
</html>