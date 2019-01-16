<?php

	/* Autoria: Victor Soares Cardel
		        Dimitri Santana Marinho

		 Data de criação: 11/01/2019

		 A serviço do NEAD, UFBA

		 Script simples para remover as tags html de um arquivo .csv
	 */

	$f1 = fopen('FAQ - Moodle-33.csv','r');
	$string = fread($f1,filesize("FAQ - Moodle-33.csv"));
	$string = strip_tags($string);
	fclose($f1);
	$f1 = fopen('FAQ - Moodle-33.csv','w');
	fwrite($f1,$string);
	fclose($f1);

?>


