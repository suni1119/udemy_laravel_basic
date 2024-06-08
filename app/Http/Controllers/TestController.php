<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');
        
        // ⇂エロクアント
        $values = Test::all(); // 変数

        $count = Test::count(); // 件数を取得できる
        
        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get(); // 条件指定
        
        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);

        return view('tests.test', compact('values')); // 文字列になる
    }
}
