<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function update(User $user)
    {
        // $user  = User::all()->get($user->id);
        $userId = $user->id;
        $user = User::find($userId);

        return view('admin.change_password', compact('user'));
    }

    public function updatePassword(Request $request, User $user)
    {
    $request->validate([
        'password' => 'required|string|min:8|confirmed',
    ]);

    $user->password = bcrypt($request->password);
    $user->save();

    return redirect()->back()->with('success', 'Password updated successfully');
}
}
