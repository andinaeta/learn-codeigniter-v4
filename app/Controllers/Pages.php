<?php namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Andi Naeta',
      'tes' => ['1', '2', '3']
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
          'tipe' => 'Rumah',
          'alamat' => 'Jl. Bayangkara No.125',
          'kota' => 'Yogyakarta'
        ],
        [
          'tipe' => 'Kantor',
          'alamat' => 'Jl. Depati Agung No.203',
          'kota' => 'Yogyakarta'
        ]
      ]
    ];
    return view('pages/contact', $data);
  }
}