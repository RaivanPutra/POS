<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.home', [
            "title" => "Dashboard",
            "produkCount" => Produk::count(),
            "pelangganCount" => pelanggan::count()
        ]);
    }
}
