<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }
    public function indexP()
    {
        return view('transaksi.index', [
            'title' => 'Dashboard'
        ]);
    }
}
