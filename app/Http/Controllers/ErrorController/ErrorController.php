<?php

namespace App\Http\Controllers\ErrorController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    // View 404 Page Start
    public function error_404()
    {
        return response()->view('errors.404', [], 404);
    }
    // View 404 Page end
}
