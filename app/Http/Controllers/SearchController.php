<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class SearchController extends Controller
{
    public function index()
    {  
        $q = request( 'q' );
        $user_list = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
            return view('posts.search')->with('user_list',$user_list);
        
        //dd($name);
        
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('posts.single_user')->with('posts',$user->posts)->with('user',$user);
    }
}
