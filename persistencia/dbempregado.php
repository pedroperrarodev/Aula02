<?php
    require_once ("Database.php");
    
    class dbempregado{


        public function obterDados(){
            if(empty($this->port)){
                $this->connection = new PDO($this->dbType.":host=".$this->server.";dbname=".$this->dbName, $this->user, $this->password);
            }
            else{
                $this->connection = new PDO($this->dbType.":host=".$this->server.";dbname=".$this->dbName.";port=".$this->port, $this->user, $this->password);
            }
            return $this->connection;

            for ($i = 0; $i< sizeof($dados); $i++){
                echo "Id: " ;$dados[$i][0]. "<br>";
                echo "Nome: ".$dados[$i][5 ]."<br>";
            }

            

            return array();     //Retorna informação pedida.

        }
    }


    ?>