<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function store(Request $request)
  {
    $user = new User;
    $user->usr_email = $request->usr_email;
    $user->usr_password = $request->usr_password;
    $user->save();
    return $user;
  }

  public function index(Request $request)
  {
    $user = User::Where('usr_email', $request->usr_email)->firstOrFail();
    return $user;
  }

  public function update(Request $request, $id)
  {
    $user = User::find($id);
    $user->usr_email = $request->usr_email;
    $user->save();
    return $user;
  }

  public function delete($id)
  {
    User::destroy($id);
    return 'User deleted';

  }

  protected function validateUser()
  {
    return request()->validate([
      'usr_email' => 'required',
    ]);
  }
}
