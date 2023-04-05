<?php
    $con = new PDO("mysql:host=localhost;dbname=ponto_eletronico", "root", "");
               /* ("mysql:host=localhost;port= 3307;dbname=ponto_eletronico", "root", ""); 
                ESPECIFICAR PORTA CASO NÃO SEJA PORTA PADRAO                            */
    $sql = "SELECT id,  no_matricula, nome, sobrenome FROM empregado";
    $rs = $con->query($sql);
    
    $rs->execute();
    echo "<pre>";
    print_r($rs->fetchAll());
    echo "</pre>";
    $con = null;
    
    ?>