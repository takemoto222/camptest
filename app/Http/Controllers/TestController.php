<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Camp;

class TestController extends Controller
{
    public function index()
    {
        $items = DB::table('test')->get('name');
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
        ];
        DB::table('test')->insert($param);
        return redirect('/');
    }
}
