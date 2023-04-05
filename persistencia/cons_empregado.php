<?php
	$con = new PDO("mysql:host=mariadbsenac;dbname=ponto_eletronico", "root", "senac");
	
	$sql = "SELECT * FROM empregado";
	$rs = $con->query($sql);


	$statuso = $rs->execute();
	$dados = $rs->fetchAll();
	$total_registros = $rs->rowCount();

	for ($i = 0; $i< sizeof($dados); $i++){
		echo "Nome: ".$dados[$i][5]."<br>";
	}
	
	
	$con = null;
	


?>
