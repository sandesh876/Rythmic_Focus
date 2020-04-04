<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use\App\Post;
use\App\User;
use Auth;

class PostsController extends Controller
{
    public function create(){
        return view('posts.create_post');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'cover_image' => 'image|nullable|max:1999'  //validating image and defining the maximum size
        ]);

        //handle file upload
        if($request->hasFile('cover_image'))
        {
            //getfile name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload image to folder

            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);



        }else
        {
            $fileNameToStore = 'noimage.jpg'; 
        }


        $post = new Post();
        $username = Auth::user()->name;
        $post->post_title = request('post_title');
        $post->post_message = request('post_message');
        $post->username = $username;
        $post->user_id = auth()->user()->id;
        $post->cover_image= $fileNameToStore;
        $post->save();

        return redirect('/home');/* ->with('mssg','Thank you for Your Order'); */

    }


    public function index()
    {
        $user_id=Auth::user()->id;
        $user = User::find($user_id);
        return view('posts.user_profile')->with('posts',$user->posts)->with('user',$user);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        Storage::delete('public/cover_images/'.$post->cover_image);
        $post->delete();
        return redirect('dashboard');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show_post')->with('post',$post);

    }

    public function edit($id)
    {   $post = Post::findOrFail($id);
        return view('posts.edit_post')->with('post',$post);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'cover_image' => 'image|nullable|max:1999'  //validating image and defining the maximum size
        ]);

        //handle file upload
        if($request->hasFile('cover_image'))
        {
            //getfile name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload image to folder

            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);



        }


        $post =Post::findOrFail($id);
        $username = Auth::user()->name;
        $post->post_title = request('post_title');
        $post->post_message = request('post_message');
        $post->username = $username;
        $post->user_id = auth()->user()->id;
        if($request->hasFile('cover_image')){
         $post->cover_image= $fileNameToStore;
        }
        $post->save();

        return redirect('/home')->with('mssg','Post Updated');

    }
}
