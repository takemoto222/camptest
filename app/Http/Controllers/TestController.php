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
        $items = Test::find($id); //テストからIDを取得、idを特定 $itemの渡す
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
        $form = $request->all('name'); //nameをデータベースから全て取り出す formに渡す
        Test::where('id', $request->id)->update($form); //'id', $request->idで更新するIDを特定、update($form)でnameを更新
        return redirect("/{$request->id}");
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
