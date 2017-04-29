<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class AdminController extends BaseController
{
    public function index()
    {
        return view("acp.index");
    }

    public function showImport()
    {
        return view("acp.themes.import");
    }
}