<?php
    /*  NAO SEI MAS DEU CERTO
    require_once ("Database.php");

    $con = new PDO("mysql:host=localhost;dbname=ponto_eletronico", "root", "");

    $rs = $con->query("SELECT id, no_matricula, nome, sobrenome, data_nascimento, data_contratacao FROM empregado");
    
    $rs->execute();
    $dados = $rs->fetchAll();

    foreach ($dados as $item) {
        //echo "Id : " .$item[0]. "Número da Matricula" .$item[1]. "Nome" .$item[2]. "Sobrenome" .$item[3]. "Data de Nascimento" .$item[4]. "Data de Contratação" .$item[5];


        echo "Id: " .$item[0]."<br>" ;
        echo "Número de matricula: " .$item[1]. "<br>";
        echo "Nome: " .$item[2]. "<br>";
        echo "Sobrenome: " .$item[3]. "<br>";
        echo "Data de Nascimento: " .$item[4]. "<br>";
        echo "Data de Contratação: " .$item[5]. "<br>";

    }
        */
        
    require_once ("Database.php");

    $db = new Database();
    $con = $db->connect();

    $sql = "SELECT * FROM empregado";
	$rs = $con->query($sql);


	$status = $rs->execute();
	$dados = $rs->fetchAll();
	$total_registros = $rs->rowCount();

    for ($i = 0; $i< sizeof($dados); $i++){
        echo "Id: " .$dados[$i][0]."<br>" ;
        echo "Número de matricula: " .$dados[$i][1]. "<br>";
        echo "Nome: " .$dados[$i][2]. "<br>";
        echo "Sobrenome: " .$dados[$i][3]. "<br>";
        echo "Data de Nascimento: " .$dados[$i][4]. "<br>";
        echo "Data de Contratação: " .$dados[$i][5]. "<br>";
        echo "<br> <br>";
    }



?>