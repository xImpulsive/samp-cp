<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $table = "routes";
    public static $REQUEST_POST = 1;
    public static $REQUEST_GET = 0;


    public function getOptions()
    {
        return [
            "as" => $this->alias,
            "uses" => $this->uses,
        ];
    }

    public function getWhereOptions()
    {
        $result = [];
        $data = $this->regex;
        $regex = explode(";;", $data);
        foreach( $regex as $r )
        {
            $split = explode("::", $r);
            if( sizeof($split) != 2 ) continue;
            $result[ $split[0] ] = $split[1];
        }
        //print_r( $result );
        return $result;
    }
}
