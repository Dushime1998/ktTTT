<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        $user = Customer::where('email', $email)->first();


        if ($user != null) {
            $passwordMatch = Hash::check($password, $user->password);

            if ($passwordMatch) {

                Auth::login($user);

                if($user->type == 'admin'){
                return redirect("/adminHome");

            }
            else{

              return  redirect('/');
            }

            } else {
                return redirect("/loginPage")->withErrors(['msg' => 'Incorect password']);
            }
        } else {
            return redirect('/loginPage')->withErrors(['msg' => 'Incorect email and password']);
        }
    }

    public function logout(){
        session()->forget('userType');
        session()->forget('userName');
        // return redirect('/');
        Auth::logout();
        return redirect(route('loginPage'));
    }
}
