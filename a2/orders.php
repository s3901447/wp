<?php

	$list = $_GET['data'];

	$file = fopen("orders.csv","w");

	foreach ($list as $line) {
		fputcsv($file, $line);
	}
	fclose($file);

?>