<?php
		$con = new PDO('mysql:host=localhost;dbname=utycc_base',"utycc_webmaster",".8geu?%y6_N$");
		//s$con = new PDO('mysql:host=localhost;dbname=utycc', "root", "1234");
		$con->exec("SET NAMES UTF-8;");
		$con->exec("SET character_set_results=UTF-8;");
		$con->exec("SET character_set_client=UTF-8;");
		$con->exec("SET character_set_connection=UTF-8;");
		$con->exec("SET collation_connection=UTF-8;");
?>