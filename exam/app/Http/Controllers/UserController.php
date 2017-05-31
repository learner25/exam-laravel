<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
     public function index()
    {
        $id = Auth::id();
        $with_address = User::with('address')->get()->where('id','like',$id);
        //$get_authenticated_user= $with_address::find($id);
        return $with_address;
    }
}
