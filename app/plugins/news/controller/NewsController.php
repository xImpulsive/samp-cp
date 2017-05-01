<?php
namespace App\Plugins\News\Controller;

use App\Plugins\News\Models\News;

class NewsController {
    public function showNews()
    {
        $news = News::all();
        return view("news::main")->with("news", $news);
    }
}