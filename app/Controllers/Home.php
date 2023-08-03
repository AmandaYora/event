<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Talent Event';
        $data['nav_items'] = [
            ['name' => 'Home', 'href' => '#home'],
            ['name' => 'About Us', 'href' => '#service'],
            ['name' => 'Product', 'href' => '#features'],
            ['name' => 'Career', 'href' => '#faq'],
            ['name' => 'Contact', 'href' => '#blog'],
        ];

        return view('LandingPage/index', $data);
    }
}
