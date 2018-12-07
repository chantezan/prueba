<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    function login(Request $request){
      //dd($request->toArray());
      if (Auth::attempt(['name' => $request->user, 'password' => $request->password])) {

        return redirect()->to("welcome");
      }
      return "Mal registro";
    }

    function welcome(){
      return view('dashboard');
    }

  public function logout()
  {
    Auth::logout();
    return view('welcome');
  }
}
