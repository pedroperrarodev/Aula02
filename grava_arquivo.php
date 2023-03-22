<?php
    /* SOBREPÕE O ARQUIVO JÁ EXISTENTE
    $texto  = $_POST["texto"];

   	$arquivo = fopen("msg", "a");

   	 fwrite($arquivo, $texto);
   	 echo "Arquivo gerado com sucesso";

   	 fclose($arquivo);
    */
    $texto  = $_POST["texto"];
    $name  = $_POST["name"].".txt";
    // NOME POST CONCATENA COM TIPO DO ARQUIVO

    if (file_exists($name) == false){
   	 $arquivo = fopen($name, "w");
   	 fwrite($arquivo, $texto);
   	 echo "Arquivo gerado com sucesso";

   	 fclose($arquivo);
    }
    else{
   	 echo "Erro: Arquivo já existe, não foi possível gravar";
    }


?>
