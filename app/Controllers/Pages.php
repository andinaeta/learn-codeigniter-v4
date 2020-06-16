<?php namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Andi Naeta',
      'tes' => ['1', '2', '3']
    ];
    echo view('layout/header', $data);
    echo view('pages/home');
    echo view('layout/footer');
  }
  
  public function about()
  {
    $data = [
      'title' => 'About Me'
    ];
    echo view('layout/header', $data);
    echo view('pages/about');
    echo view('layout/footer');
  }
}