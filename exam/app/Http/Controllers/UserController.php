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

     public function put_user_address(Request $request)
    {
        $id = Auth::id();
        $with_address = User::with('address')->get()->where('id','like',$id);
        //$get_authenticated_user= $with_address::find($id);
         $with_address->type=$request->type;
         $with_address->address_line_1=$request->address_line_1;
         $with_address->address_line_2=$request->address_line_2;
         $with_address->state=$request->state;
         $with_address->postal_code=$request->postal_code;
         $with_address->country_id=$request->country_id;
          $save_flag =  $with_address->save();

          return $save_flage==1?'saved successfully':'saving failed.try again..';
          
    }
}
