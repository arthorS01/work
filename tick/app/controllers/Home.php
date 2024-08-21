<?php

namespace App\Controllers;

use resources\view\View;
use App\Models\{Category,Task};


class Home{

    public function index(){

        $view_handler = new View;

        $view_handler->setPath("index");
        $all_categories = (new Category )->get_categories();

        return $view_handler->render(true,["pageTitle"=>"Home|tick" , "categories"=>$all_categories]);
    }

    public function save_task(){

        $response = [];
        $response["status"] = true;
        $response["message"] = "saved";
        //validate request
        if($_SERVER["REQUEST_METHOD"]== "POST"){

            //get JSON data
            $data = file_get_contents("php://input");

            //convert data to object

            $data = json_decode($data);

            $result = (new Task)->add_task((int)$data->categoryId,$data->detail,$data->date,(int)$data->priority);

            if(!$result){
                $response["status"] = false;
                $response["message"] = "Something went wrong";
            }else{
                $response["task"] = $data;
            }
        }else{
            $response["status"] = false;
            $response["message"] = "Method not  allowed";
            
        }

        return JSON_encode($response);
    }
}