<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $sampleValue = "sample テキストです。";

        // 参照
        // $records = DB::connection('mysql')->select("select * from items");
        // $name = $records[0]->name; // dd の処理を削除するため、$name 変数に代入する内容へ変更

        // 追加
        // $insertResult = DB::connection("mysql")->insert("insert into items (id,name,price) values (null,'メロン',2000)");
        
        // 更新
        // $updateResult = DB::connection("mysql")->update("update items set price = 600 where name = 'りんご'");
        
        // 削除
        // $deleteResult = DB::connection("mysql")->delete("delete from items where name = 'りんご'");
        // dd($deleteResult);

        return view("top/index", ["sampleValue" => $sampleValue]);
    }
}
