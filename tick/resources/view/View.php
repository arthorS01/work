<?php

declare(strict_types = 1);

namespace Resources\View;

class View{

    public function setPath($path):void{
        $this->path = $path;
    }

    public function render($headerFlag,$param=[],$cssFiles=[]):string{
        
        $path = \VIEW_PATH.$this->path.".php";
        $header =\VIEW_PATH."header.php";
        $footer = \VIEW_PATH."footer.php";
        $head= \VIEW_PATH."head.php";
        $body = \VIEW_PATH."body.php";

       extract($param);
      
        if(file_exists($path)){
            ob_start();
    
            require_once $header;
            require_once $body;
            require_once $path;
            return ob_get_clean();
        }

        throw new \src\Exception\ViewNotFound();
        
    }
}