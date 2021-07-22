
<?php


    class Db{

        private $Db_name        = "project";
        private $Db_password    = "";
        private $Db_username    = "root";
        private $Db_serverName  = "localhost";
        private $connection     = false;


        public function showDbDetails(){
            echo $this->Db_name ." ".$this->Db_password ." ".$this->Db_username ." ".
                    $this->Db_serverName;       
        }

        protected function mysql_connect(){
       
            $this->connection = mysqli_connect($this->Db_serverName,$this->Db_username,$this->Db_password,$this->Db_name);

            if(!$this->connection){
               return false;
            }

            return $this->connection;
        }
        protected function close_connect(){
            
            mysqli_close($this->connection);
        }

      
    }

    $db = new Db;
  
