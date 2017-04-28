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
}
