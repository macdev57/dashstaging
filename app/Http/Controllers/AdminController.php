<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    function index(){
        return view('Dashboards.admins.index');
    }

    function profile(){
        return view('Dashboards.admins.profile');
    }
    function settings(){
        return view('Dashboards.admins.settings');
    }

    function updateInfo(Request $request){
        $validator = \Validate::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
        ]);

        if($validator->passes()){
            return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
            $query = User::find(Auth::user()->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,           
            ]);
            if($query){
                return response()->json(['status'=>0,'msg'=>'Something went wrong.']);
            }else{
                return response()->json(['status'=>1,'msg'=>'Your profile info has been updated succesfully']);
            }

        }
        }

    
}
