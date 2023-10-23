<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'color' => 'required',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->color = $request->input('color');
        $user->save();
    }

    public function index() {
        $userCount = user::count();
        return response($userCount);
    }
}
