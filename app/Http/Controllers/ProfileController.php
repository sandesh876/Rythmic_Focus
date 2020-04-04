<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request,[
            'change_image' => 'image|nullable|max:1999'  //validating image and defining the maximum size
        ]);

        //handle file upload
        if($request->hasFile('change_image'))
        {
            //getfile name with the extension
            $filenameWithExt = $request->file('change_image')->getClientOriginalName();

            //get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('change_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload image to folder

            $path = $request->file('change_image')->storeAs('public/profile_images',$fileNameToStore);



        }
        
        $id=$request->query('id');
        $user =User::find($id);
        $user->user_profile = $fileNameToStore;
        $user->save();

        return redirect('/dashboard');


    }
}
