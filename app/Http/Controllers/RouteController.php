<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RouteController extends Controller
{
    //
    
     public function login(){

    if (!Auth::check()){

       		return view('login');

   		}else{

   				return redirect('/home');

   			}
   }

   public function addProfessor(){
         return view('adminAddProf');
   }

    public function addStudent(){
        return view('adminAddStudent');
    }



}
