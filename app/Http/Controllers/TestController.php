<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Camp;

class TestController extends Controller
{
    public function index()
    {
        $items = Camp::all();
        return view('index', ['items' => $items]);
    }
}
