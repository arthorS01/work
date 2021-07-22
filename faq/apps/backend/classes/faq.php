
<?php

    require_once "Controller.php";

    class faq extends Controller{

        private $question ;
        private $response ;

        private function sanitize($str){
        
            $str = filter_var($str,FILTER_SANITIZE_STRING);
            $str = trim($str);
            $str = stripslashes($str);
            $str = htmlspecialchars($str);

            return $str;
        }
       

        private function addFAQ(){

            $result = $this->sql("INSERT INTO faq(questions,responses) VALUES('$this->question','$this->response')");
            
            if($result){

                return true;
             }
            throw new Exception("Sorry,please try again later");
            return false;
        }

        public function showFAQ(){
            
            $result =$this->sql("SELECT * FROM faq WHERE responses !=''");
            
            while($faq = mysqli_fetch_assoc($result)){

                echo JSON_encode($faq).'<br>';
            }
            
        }

        public function setFAQ($question ,$response = null){

            $this->question = $this->sanitize($question);
            $this->response = $this->sanitize($response);

            return  $this->addFAQ();

        }
    }
    
    
    $faq = new Faq;
    //echo $faq->sanitize("<script>john</script>");
     