<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Mail\Welcome2;

class RegistrationController extends Controller
{
    public function create(){
    	
    	return view('users.registration');
    	
    }

    public function store(Request $request){
    	// validate the form .........
    	$this->validate($request, [
    		'name'=>'required|min:2',
    		'email'=>'required|email',
    		'password'=>'required|min:6|confirmed'
    		]);

    	// register the user ........

            $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) 
        ]);
    	//log the user in ........
    	auth()->login($user);

          //sending a mail to a user 
          // \Mail::to($user)->send(new Welcome2($user));

          //Let's sned a flash message to the user
        session()->flash('message', 'Thanks so much for signing up! A welcome mail has been send to your emailadress  ');

    	//redirect to the home page .........
    	return redirect('/users/dashboard');


    }


}
