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
     * @return \Illuminate\Http\Response
     */
    

    public function add(){

        return view('add');
    }

    

    public function index()
    {
        $blogs = Blog::all();
      // show data to our view
        return view('home[real]',['blogs' => $blogs]);
       
    }

    public function edit(Request $req) {
    
      return view('edit');
    }

    public function index1()
    {
        return view('welcome');
    }

    public function index2(){
      // we need to show all data from "blog" table
      $blogs = Blog::all();
      // show data to our view
      return view('home[real]',['blogs' => $blogs]);
    }

    public function index3(){
      // we need to show all data from "blog" table
      $blogs = Blog::all();
      // show data to our view
      return view('homeEmp[real]',['blogs' => $blogs]);
    }



    public function addItem(Request $req) {
      $rules = array(
        'projectName' => 'required',
        'signedEmployee' => 'required',
        'dueDate' => 'required'
      );
      // for Validator
      $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      else {
        $blog = new Blog();
        $blog->projectName = $req->projectName;
        $blog->signedEmployee = $req->signedEmployee;
        $blog->dueDate = $req->dueDate;
        $blog->progress= $req->progress;
        $blog->save();
        return response()->json($blog);
      }
    }


    public function store(Request $request){
        test::create([
                'projectName' => $request->get('projectName'),
                'signedEmployee' => $request->get('signedEmployee'),
                'dueDate' => $request->get('dueDate'),
                 'progress' => $request->get('progress')

            ]);
        return view('add');
    }

    public function create(){
        //
    }

     public function login(Request $request){

        //dd($request->all());
          
          if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
            ]))
          {
          $user = User::where('email',$request->email)->first();          
          if($user->is_admin()){
            return redirect()->route('home');
          }   return redirect()->route('homeEmp');
          }   return redirect()->back(); 

    }



}
