<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index()
    {
        //$faker = \Faker\Factory::create();
        //dd($faker->name);
        $data = [
            'title' => 'HOME | ERLAN',
            'tes' => ['erlan', 'herlangga']
        ];
        //variabel array data digunakan untuk mengisi title yg berbeda pada setiap page

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | ERLAN'
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact | ERLAN',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl q',
                    'kota' => 'Bekasi'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl 2',
                    'kota' => 'jakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
