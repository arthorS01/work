<?php

    require_once "../classes/faq.php";

    $response = [];
    $response["is_successful"] = false;
    $response["text"] = null;

   // $_POST["question"] = "what is your name?";

    if(isset($_POST["question"])){

        
            if(!empty($_POST["question"])){
            
                try{
                    if($faq->setFAQ($_POST["question"])){

                        $response["is_successful"] = true;
                        $response["text"] = "question was added successfully";
                    }
                }catch(Exception $e){
                    $response["text"] = $e->getMessage();
                }

            }else{
                $response["text"] = "Please enter a question";
            }
    }

    echo JSON_encode($response);