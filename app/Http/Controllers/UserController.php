<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserProfessor;
use App\Role;
use Carbon\Carbon;

class UserController extends Controller
{
    //




    public function store(Request $request)
    {
//        request()->validate([
//            'title' => 'required',
//            'body' => 'required',
//        ]);

        Users::create($request->all());

        return redirect()->route('add')
            ->with('success','Professor added');
    }



    public function createProfessor(Request $request){
//        $this->validate($request,[
//                'id_number' => 'required',
//                'lastname' => 'required',
//                'firstname'=> 'required',
//                'middlename' => 'required',
//                'email' =>  'required',
//        ]);


        $role_prof = Role::where('name', 'professor')->first();

        //inputted values
        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $email = $request->input('email');
        $idNumber= $request->input('id_number');
        $birthdate = '08/21/1998';
        $format = preg_replace('/\s+/', '', $firstname);

        $userTable = new User();
        $userTable->id_number = $idNumber;
        $userTable->last_name = $lastname;
        $userTable->first_name = $firstname;
        $userTable->middle_name = $middlename;
        $userTable->birthdate = Carbon::parse($birthdate);
        $userTable->email = $email;
        $userTable->password = bcrypt($birthdate);
        $userTable->access_level = '2';
        $userTable->save();
        $userTable->roles()->attach($role_prof);


        $profTable = new UserProfessor();
        $profTable->professor_number = $idNumber;
        $profTable->last_name = $lastname;
        $profTable->first_name = $firstname;
        $profTable->middle_name = $middlename;
        $profTable->save();



        return view('adminAddProfessor')->with('info','Professor Successfully added');


    }
}
