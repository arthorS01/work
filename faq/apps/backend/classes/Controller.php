
<?php

    require_once "Db.php";

    class Controller extends Db{


        protected function sql($query){

            $connection =  $this->mysql_connect();

            $result = mysqli_query($connection,$query);

            $this->close_connect();

            return $result;
         }
         protected function addUser($username,$firstname,$lastname,$matNO,$accountType,$password,$email){

            $result = $this->sql("INSERT INTO users VALUES('$username','$firstname','$lastname',
                        '$accountType','$email','$matNO','$password')");

            return $result;

         }

         public function getUserDetails($username,$email){

            $result = $this->sql("SELECT * FROM users WHERE username = '$username' AND email = '$email'");
            return $result;

         }

    }

    $testC = new Controller;
   
  
  
  
