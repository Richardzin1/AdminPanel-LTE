<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;
Use App\Models\User;
use BaconQrCode\Renderer\Color\Rgb;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
    return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
      $input = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8'
      ]);

      User::create($input);
      return redirect()
      ->route('users.index')
      ->with('status', 'User create with success');
    }
}
