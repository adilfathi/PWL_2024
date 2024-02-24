<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
}

public function about() {
    return 'Nama Adil Fathi Abdillah dengan NIM 2341728015';

}
public function articles($id) {
    return 'Halaman Artikel Dengan ID '.$id;

}
}

