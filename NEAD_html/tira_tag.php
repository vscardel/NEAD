<?php

	$f1 = fopen('bla.txt','r');
	$string = fread($f1,filesize("bla.txt"));
	$string = strip_tags($string);
	fclose($f1);
	$f1 = fopen('bla.csv','w');
	fwrite($f1,$string);
	fclose($f1);

?>

