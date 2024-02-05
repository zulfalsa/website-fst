<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PageController extends Controller
{
    public function index(Pages $pages)
    {
        return view('pages.index', [
            "title" => "Page - Forum Studi Teknik (FST)",
            "pages" => $pages
        ]);
    }
}
