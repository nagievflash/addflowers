<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Главная';
        return view('index', compact('title'));
    }

    public function contact() {
        $title = 'Контакты';
        return view('index', compact('title'));
    }
}
