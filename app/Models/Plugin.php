<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    protected $table = "plugins";

    public function remove()
    {
        Routes::where("plugin_id", $this->id)->delete();
        $this->delete();
    }
}