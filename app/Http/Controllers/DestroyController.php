<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestroyController extends Controller
{
    public function destroy()
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->delete();
        return redirect()->action('HomeController@index')->with('success', 'Account Deleted');
    }
}
