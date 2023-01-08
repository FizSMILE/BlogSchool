<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'avatar' => 'image|file|max:3024',
            
        ]);

        if($request->file('avatar')) {
            $validateData['avatar'] = $request->file('avatar')->store('post-avatar');
        } else {
            $uiavatar = 'https://ui-avatars.com/api/?name=' . $validateData['name'] . '&background=random&color=random';
           // get file image from ui-avatars.com and store to storage/app/public/post-avatar
        // Get the image from the url and store it in the public folder
        $image = file_get_contents($uiavatar);
        $filename = 'post-avatar/'. $validateData['name'] . '.png';
        file_put_contents(storage_path('app/public/' . $filename), $image);
        $validateData['avatar'] = $filename;
        }
        
        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);

        return redirect('/')->with('success', 'Registration successfull! Please login');

    } 
}
