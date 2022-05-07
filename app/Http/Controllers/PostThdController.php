<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostThdController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = "select * from users order by name ";
        $users = DB::select($sql);
        // dd($users);
        $output = [];
        $output["users"] = $users;
        $output["title"] = "たいとる";
        // return view('ex.index', compact('users'));
        return view('thd.index', $output);
    }

}
