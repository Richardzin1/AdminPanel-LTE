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
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8'
      ]);

      User::create($input);
      return redirect()
      ->route('users.index')
      ->with('status', 'User create with success');
    }

    public function edit(User $user){
    return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user){
      $input = $request->validate([
        'name' => 'required',
        'email' => 'required|email|',
        'password' => 'exclude_if:password,null|min:8'
      ]);
      $user->fill($input);
      $user->save();
      return redirect()
      ->route('users.index')
      ->with('status', 'Usuário editado com sucesso');
    }
}
