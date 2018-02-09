<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserProfessor;
use App\Role;
use App\DisplayPicture;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

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
        $birthdate = $request->input('birthdate');








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



        $profTable = new UserProfessor();
        $profTable->professor_number = $idNumber;
        $profTable->last_name = $lastname;
        $profTable->first_name = $firstname;
        $profTable->middle_name = $middlename;
        $profTable->birthdate = Carbon::parse($birthdate);
        $file = $request->file('file');
        $path = Storage::putFile('public\images', $file);
        $path = preg_replace('-/-', '\\', $path);
        $profTable->display_image = $path;

        $userTable->save();
        $userTable->roles()->attach($role_prof);
        $profTable->save();




        return redirect('home/view_professor');


    }



    public function viewProfessor(){

            $users = DB::table('user_professors')->get();
            return view('adminViewProf', ['users' => $users]);
    }

    public function viewStudent(){

        $users = DB::table('user_students')->get();
        return view('adminViewStudent', ['users' => $users]);
    }


}
