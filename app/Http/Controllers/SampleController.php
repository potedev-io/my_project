<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller 
{
    public function index(Request $request) 
    {
        // 追加
        // $insertresult = DB::connection('mysql')->insert("insert into users (ID, email, name, password) VALUES (1, 'taro@example.com', '太郎', '123'),(2, 'hanako@example.com', '花子', '456'),(3, 'jiro@example.com', '次郎', '789')");
        // dd($insertresult);

        // 削除
        $deleteresult = DB::connection('mysql')->delete("delete from users where ID IN (1, 2)");
        // $deleteresult = DB::connection('mysql')->delete("delete from users where email LIKE '%@example.com'");
        dd($deleteresult);

    }
}
