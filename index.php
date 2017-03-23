<html>
	<head>

	<meta charset="UTF-8">
	</head>

	<body>

	<h1>Hello les Wilders</h1>
	<?php

	$user = 'root';
	$pass = 'jecode4lyon';

	try {
	    $dbh = new PDO('mysql:host=localhost;dbname=cineacademy', $user, $pass);
	    foreach($dbh->query('SELECT * from actors') as $row) {
		echo '<li>'.$row['firstname']. ' ' . $row['lastname']. '</li>';
	    }
	    $dbh = null;
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}

	?>


</body>

</html>
