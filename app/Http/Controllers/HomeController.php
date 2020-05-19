<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ranking;
use App\Admin;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       /* $user=DB::table('users')
                ->join('admins','users.id','=','admins.user_id')
                ->select('users.*','admins.user_id')->get();
        dd($user);*/

        return view('home');
    }
}
