<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestOneController extends Controller
{
    public function index()
    {
        // $environment = App();
        $environment = App::environment();
        dd($environment);
    }
}
