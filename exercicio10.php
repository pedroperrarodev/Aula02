<?php
    $dados[] = array("Nome" => "Maria", "data_nasc" => "10/10/1985", "salario" => 2500, "cod_cargo" => 3);
    $dados[] = array("Nome" => "João", "data_nasc" => "1/1/1983", "salario" => 1500, "cod_cargo" => 1);
    $dados[] = array("Nome" => "Pedro", "data_nasc" => "15/11/1984", "salario" => 4500, "cod_cargo" => 4);
    $dados[] = array("Nome" => "Carla", "data_nasc" => "25/03/1994", "salario" => 1500, "cod_cargo" => 1);
    $dados[] = array("Nome" => "Pedro", "data_nasc" => "15/11/1985", "salario" => 2500, "cod_cargo" => 3);

    
    for ($i = 0; $i<sizeof($dados); $i++){
        echo "—---------------------------------------- <br>";
        echo "Nome: " .$dados[$i]["Nome"]. "<br>";
        echo "Data Nascimento: " .$dados[$i]["data_nasc"]. "<br>";
        echo "Salário: " .$dados[$i]["salario"]. "<br>";
        echo "Código de cargo: " .$dados[$i]["cod_cargo"]. "<br>";
        echo "—---------------------------------------- <br>";
        echo "<br> <br>";   
    }

    /* REAJUSTE DE VALOR NO ARRAY
    echo "<h3> Com ajuste de salário </h3>";
    for ($i = 0; $i<sizeof($dados); $i++){
        if ($dados[$i]["cod_cargo"] ==1){
            $dados[$i]["salario"] = $dados[$i]["salario"] * 1.10;
        }
        echo "—---------------------------------------- <br>";
        echo "Nome: " .$dados[$i]["Nome"]. "<br>";
        echo "Data Nascimento: " .$dados[$i]["data_nasc"]. "<br>";
        echo "Salário: " .$dados[$i]["salario"]. "<br>";
        echo "Código de cargo: " .$dados[$i]["cod_cargo"]. "<br>";
        echo "—---------------------------------------- <br>";
        echo "<br> <br>";   
    }
    */

    
    ?>