<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Fachrizal Taufiq Goe',
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me! | Fachrizal Taufiq Goe',
        ];
        return view('pages/about', $data);
    }
    //--------------------------------------------------------------------

}
