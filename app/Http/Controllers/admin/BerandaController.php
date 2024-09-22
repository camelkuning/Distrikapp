<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BerandaController extends Controller
{
    public function viewberanda()
    {
        return view('admin.beranda.viewberanda');
    }

    public function uploadberanda(Request $request)
    {
        //Start uploadberanda
    }
}
