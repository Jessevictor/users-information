<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index(){
        $users = \DB :: select('SELECT * FROM users');
        return view('home',['users'=> $users]);
    }
    public function delete($id){
       $users = DB ::select('DELETE from users where id= ?',[$id]);
       return redirect('/home');
    }
}
