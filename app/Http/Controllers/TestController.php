<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    //練習
    public function index($id)
    {
        // $items = Test::all();
        $items = Test::find($id);
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
        $form = $request->all('name'); //名前を更新したいのでnameを指定しました
        unset($form['_token']);
        Test::where('name', $request->name)->update($form); //↑と同じ理由でnameを指定しました
        return redirect('/');
    }
    //練習


    //後
    //新規会員登録
    public function sineup()
    {
        return view('sineup');
    }
    //マイページ編集
    public function mypage_edit()
    {
        return view('mypage_edit');
    }
}
