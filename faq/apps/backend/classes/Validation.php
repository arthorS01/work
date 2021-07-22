
<?php

    require_once "Controller.php";

    class Validation extends Controller{


        private $counter  = 0;

       public function checkUser($username,$password){

            $result = $this->sql("SELECT * FROM users WHERE username ='$username' AND password = '$password'");
            $result = mysqli_fetch_assoc($result);

            if(!$result){
                echo "user does not exist";
                return false;
            }
            echo "user exist";
            return true;

       }
    
       public function checkPassword($password){
           //check password
           $upperCaseCount = $lowerCaseCount = $specialCount = $numberCount =  0;
            $length = strlen($password);
            for( ; $this->counter < $length; $this->counter++){

                    if(ctype_digit($password[$this->counter])){
                        ++$numberCount;
                    }
                    if(ctype_lower($password[$this->counter])){
                        ++$lowerCaseCount;
                    }
                    if(ctype_upper($password[$this->counter])){
                        ++$upperCaseCount;
                    }
                    if(ctype_punct($password[$this->counter])){
                        ++$specialCount;
                    }
            }
            $this->counter = 0;

            if($numberCount >= 1 && $lowerCaseCount >= 1 && $specialCount >= 1 && $upperCaseCount >= 1){
              
                return true;
            }
            
            return false;
       }
 
       public function checkString($str){
           $length = strlen($str);
            $status = true;         //valid

           for(; $this->counter < $length; $this->counter++){
                if(ctype_digit($str[$this->counter])){
                    $status = false;
                    break;
                }
           }
           return $status;
       }


    }

    $test = new Validation ;
 
    
  
  
  
