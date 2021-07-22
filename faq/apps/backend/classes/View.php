
<?php

    require_once "Controller.php";

    class View extends Controller{


        protected function viewUserDetails($username,$email){

            $result = $this->getUserDetails($username,$email);
            if(!$result){
                echo"user not found";
                return false;
            }
           print_r(mysqli_fetch_assoc($result)) ;
        }

    }

    $testV = new View;
    
  
  
  
