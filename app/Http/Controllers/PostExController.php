<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostExController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = "select * from users order by id";
        $users = DB::select($sql);
        // dd($users);
        $output = [];
        $output["users"] = $users;
        $output["title"] = "たいとる";
        // return view('ex.index', compact('users'));
        return view('ex.index', $output);
    }

}
