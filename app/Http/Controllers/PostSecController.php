<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostSecController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $sql = "select * from users order by id desc";
        $users = DB::select($sql);
        // dd($users);
        $output = [];
        $output["users"] = $users;
        $output["title"] = "たいとる";
        // return view('ex.index', compact('users'));
        return view('sec.index', $output);
    }

}
