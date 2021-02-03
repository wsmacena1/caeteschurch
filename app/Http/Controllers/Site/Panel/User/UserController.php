<?php

namespace App\Http\Controllers\Site\Panel\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $user = DB::table('users')
       ->paginate(15);
       return view('site.panel.user.index')->with('user', $user);
   }
}
