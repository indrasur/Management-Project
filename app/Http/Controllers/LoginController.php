<?php

namespace App\Http\Controllers;


use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Blog;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\test;





class LoginController extends Controller
{
    public function login(Request $request){

    		//dd($request->all());
      		
      		if(Auth::attempt([
      			'email' => $request->email,
      			'password' => $request->password
      			]))
      		{
      		$user =	User::where('email',$request->email)->first();     			
      		if($user->is_admin()){
      			return redirect()->route('home');
      		}   return redirect()->route('homeEmp');
      		}   return redirect()->back(); 

    }

     public function index()
    {
        $blogs = Blog::all();
      // show data to our view
        return view('home',['blogs' => $blogs]);
       
    }

}
