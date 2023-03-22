<?php
$csv_data = file_get_contents("arquivo_dados.csv");

$lines = explode("\n", $csv_data);

for($i=0; $i<count($lines); $i++){
    $data = explode(",", $lines[$i]);
    echo "Nome: " .$data[2]. "<br>";
    echo "Email: " .$data[3]. "<br>";
    echo "Data: " .$data[1]. "<br>";
    echo "Total de Vendas: " .$data[0]. "<br>";
    echo "<br> -----------------------------<br>";

}



?>