<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   function home(){
    return view('dashboard', ['rss'=>Auth::user()->rss()->paginate(10)]);
   }

   function view (Request $request){
    try{
    $result = simplexml_load_file($request->url);
    return view('welcome', ['rss' =>  $result]); 
    } catch(\Exception $e){
        return view('welcome', ['error' =>  true]); 
    }
    
   }

   function save_rss(Request $request){
       $valid = $request->validate([
           'name'=>'required|min:2|max:200',
           'url'=>'required|url',
       ]);

       User::find(Auth::user()->id)->rss()->create($valid);
       return redirect()->back()->with('success', 'Sikeres művelet!');
   }

   function delete(Request $request){
        User::find(Auth::user()->id)->rss()->where('id', $request->delete)->delete();
        return redirect()->back()->with('success', 'Sikeres művelet!');
   }
}
