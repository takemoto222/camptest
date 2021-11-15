<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    //練習
    public function index()
    {
        $items = Test::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $form = $request->all('name');
        Test::create($form);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $item = Test::find($request->name);
        $form = $request->all();
        $item->fill($form)->save();
        return redirect('/');
    }
    //練習


    //後
    //マイページ編集
    public function mypage_edit()
    {
        return view('mypage_edit');
    }
    //ユーザーページ
    public function user_page()
    {
        return view('user_page');
    }
}
