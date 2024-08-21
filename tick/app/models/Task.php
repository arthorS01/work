<?php
namespace App\Models;

use App\Models\Model;
use App\App;

class Task extends Model{

    protected string $table = "task";

    public function add_task( int $cat_id,string $text, string $date,int $priority ):bool
    {
        $query = "Insert into {$this->table}(category_id,detail,set_time,priority) Values(:category_id,:detail,:set_time,:priority)";

        $result = App::$db->create($query,["category_id"=>$cat_id,"detail"=>$text,'set_time'=>$date,"priority"=>$priority]);

        return (bool)$result;

    }
}