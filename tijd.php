<?php
array_shift($argv);
if (!isset($argv[0])) {
	echo "Geen argumenten opgegeven!";
	exit();
}
foreach ($argv as $a) {
	if (strpos($a, "s")) {
		$b = (int)$a;
		echo $b." seconden\r\n";
	} elseif (strpos($a, "m")) {
		$b = (int)$a;
		echo $b." minuten\r\n";
	} elseif (strpos($a, "u")) {
		$b = (int)$a;
		echo $b." uren\r\n";
	} elseif (strpos($a, "d")) {
		$b = (int)$a;
		echo $b." dagen\r\n";
	} else {
		echo "Geen goede variable gegeven!\r\n";
	}
}
?>