<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Coba CI4'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jln. efg No 123',
                    'kota' => 'B'
                ],
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jln. hij No 456',
                    'kota' => 'C'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
