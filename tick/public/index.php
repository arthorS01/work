<?php

require "../vendor/autoload.php";
require "../config/config.php";

use App\Services\Router;
use App\Controllers\Home;
use App\App;

//instantiate router 

try{
    $myRouter = new Router();

    $myRouter->get("/",[Home::class,"index"]);
    $myRouter->post("save/",[Home::class,"save_task"]);

    (new app($myRouter))->render($_SERVER["REQUEST_URI"],$_SERVER["REQUEST_METHOD"]);
    
}catch(Exception $e){
    echo $e->getMessage();
}