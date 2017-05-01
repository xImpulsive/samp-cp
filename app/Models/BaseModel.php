<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    protected $config = "";
    public function __construct() {
        parent::__construct();

        if( $this->table == "" && $this->config != "")
            $this->table = config( $this->config );
    }
}