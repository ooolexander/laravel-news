<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Новостной сайт', 'pageTitle' => 'Страница новостей'];

        return view('pages.messages.index')->with($data);
    }
    public function edit($id)
    {
        return view('pages.messages.edit');
    }
}
