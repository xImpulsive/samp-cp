<?php

use App\Models\PluginInstaller;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Installer implements PluginInstaller
{
	public function install( )
	{
		Schema::create('news', function (Blueprint $table) {
            $table->increments('id');

            $table->string("author_id");
            $table->string("title");
            $table->string("content");
            
            $table->timestamps();
        });
	}

	public function uninstall()
	{
		Schema::dropIfExists('news');
	}
}