<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function add(Request $request)
    {
        DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$request->name, $request->email, $request->password]);
        return $request->name;
    }
    public function show()
    {
        $users = DB::select('select * from users');
        return $users;
    }
}
