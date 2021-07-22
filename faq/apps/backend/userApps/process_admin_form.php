<?php

    require_once "../classes/faq.php";

    $response = [];
    $response["is_successful"] = false;
    $response["text"] = null;

   // $_POST["question"] = "what is your name?";

    if(isset($_POST["question"])){

        
            if(!empty($_POST["question"] && !empty($_POST["response"]))){

                    try{
                        if($faq->setFAQ($_POST["question"],$_POST["response"])){

                        $response["is_successful"] = true;
                        $response["text"] = "question and response were added successfully";
                    }
                }catch(Exception $e){
                    $response["text"] = $e->getMessage();
                }
                
            }else{
                $response["text"] = "Please no field should be empty";
            }
    }

    echo JSON_encode($response);