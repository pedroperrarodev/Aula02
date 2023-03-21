<?php
    $nome = "maria da silva";
    $codigo = " AAA001";

    echo "Tamanho: " .strlen($nome);
    echo "<br>";

    echo strtolower($nome);
    echo "<br>";

    echo strtoupper($nome);
    echo "<br>";

    echo ucfirst($nome);
    echo "<br>";
    
    echo ucwords($nome);
    echo "<br>";
    

    echo "<br> <br>";
    if (str_starts_with($codigo, " AAA")){
        echo $codigo. " Código Válido ";
    }
    else{
        echo $codigo. " Código Inválido";
    }

    echo "<br>";
    echo "<br>";
    echo $codigo;
    echo "<br>";

    $codigo_limpo = trim($codigo);
    echo "<br>";

    if (empty(trim($codigo))){
        echo "Está vazio";
    }
    if (strlen(trim($codigo)) == 0){
        echo "<br> ESTÁ VAZIO 2";
    }

    


    ?>