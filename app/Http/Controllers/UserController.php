<?php

namespace App\Http\Controllers;
use League\Csv\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\UserProfessor;
use App\UserStudent;
use App\Role;
use App\DisplayPicture;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

    public function createProfessor(Request $request){




        $role_prof = Role::where('name', 'professor')->first();

        //inputted values
        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $email = $request->input('email');
        $idNumber= $request->input('id_number');
        $birthdate = $request->input('birthdate');

        $userTable = new User();
        $userTable->id_number = $idNumber;
        $userTable->last_name = $lastname;
        $userTable->first_name = $firstname;
        $userTable->middle_name = $middlename;
        $userTable->email = $email;
        $prepassword = explode('-', $birthdate);
        $password = $prepassword[1] . $prepassword[2]. $prepassword[0];
        $userTable->password = bcrypt($password);
        $userTable->access_level = '2';

        $profTable = new UserProfessor();
        $profTable->professor_number = $idNumber;
        $profTable->last_name = $lastname;
        $profTable->first_name = $firstname;
        $profTable->middle_name = $middlename;
        $profTable->birthdate = Carbon::parse($birthdate);
        $file = $request->file('file');
        $path = Storage::disk('uploads')->putFile('', $file);
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

        $users = UserStudent::all();
        return view('adminViewStudent', ['users' => $users]);
    }


    public function uploadStudent (Request $request){

        $file = $request->file('file');
        $reader = Reader::createFromPath($file, 'r');
        $results = $reader->fetch();


        $count = 0;
        foreach($results as $row) {

            if($count > 1){
                $role_student = Role::where('name', 'student')->first();
                
                $lastname = $row[2];
                $firstname = $row[3];
                $middlename = $row[4];
                $personalEmail = $row[7];
                $idNumber= $row[1];
                $birthdate = Carbon::parse($row[5]);


                $suffix = "engg";

                $format = preg_replace('/\s+/', '', $firstname);

                if (is_numeric($idNumber)) {


                $userTable = new User();
                $userTable->id_number = $idNumber;
                $userTable->last_name = $lastname;
                $userTable->first_name = $firstname;
                $userTable->middle_name = $middlename;
                $userTable->email = strtolower($format . '.' . $lastname . '.' . $suffix. '@ust.edu.ph' );
                $prepassword = explode('-', substr($birthdate,0,9));
                $password = $prepassword[1] . $prepassword[2]. $prepassword[0];

                $userTable->password = bcrypt($password);
                $userTable->access_level = '1';

                $studentTable = new UserStudent();
                $studentTable->student_number = $idNumber;
                $studentTable->last_name = $lastname;
                $studentTable->first_name = $firstname;
                $studentTable->middle_name = $middlename;
                $studentTable->birthdate = Carbon::parse($birthdate);
                $studentTable->personal_email = $personalEmail;

                $userTable->save();
                $userTable->roles()->attach($role_student);
                $studentTable->save();

                }
            }
            $count++;


        }


        $request->session()->flash('success', 'CSV Uploaded');
        return redirect('home/view_student');

    }

    public function createStudent(Request $request){

        $request->validate([
            'idNumber' => 'required|min:10|max:10',
            'last_name' => 'required',
            'first_name'=> 'required',
            'middle_name' => 'required',
            'email' =>  'required|email',
            'birthdate' => 'required',
            'file' => 'required',
        ]);

        $role_student = Role::where('name', 'student')->first();


        $lastname = $request->input('last_name');
        $firstname = $request->input('first_name');
        $middlename = $request->input('middle_name');
        $personalEmail = $request->input('email');
        $idNumber= $request->input('idNumber');
        $birthdate = $request->input('birthdate');
        $suffix = "engg";

        $format = preg_replace('/\s+/', '', $firstname);


        $userTable = new User();
        $userTable->id_number = $idNumber;
        $userTable->last_name = $lastname;
        $userTable->first_name = $firstname;
        $userTable->middle_name = $middlename;
        $userTable->email = strtolower($format . '.' . $lastname . '.' . $suffix. '@ust.edu.ph' );
        $prepassword = explode('-', $birthdate);
        $password = $prepassword[1] . $prepassword[2]. $prepassword[0];
        $userTable->password = bcrypt($password);
        $userTable->access_level = '1';

        $studentTable = new UserStudent();
        $studentTable->student_number = $idNumber;
        $studentTable->last_name = $lastname;
        $studentTable->first_name = $firstname;
        $studentTable->middle_name = $middlename;
        $studentTable->birthdate = Carbon::parse($birthdate);
        $studentTable->personal_email = $personalEmail;

        $userTable->save();
        $userTable->roles()->attach($role_student);
        $studentTable->save();

        $request->session()->flash('success', 'Student successfully added');
        return redirect('home/view_student');

    }




}
