<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "";
    protected $config = "ucp.user.table";
    public $timestamps = false;

    public function __construct()
    {
        parent::__construct();

        if ($this->table == "" && $this->config != "")
            $this->table = config($this->config);
    }

    public function getAuthPassword()
    {
        $field = config("ucp.user.password");
        return $this->$field;
    }

    public function setRememberToken($value)
    {
        return null;
    }
}