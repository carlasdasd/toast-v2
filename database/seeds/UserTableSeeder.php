<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\UserStudent;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'administrator')->first();
        $role_prof = Role::where('name', 'professor')->first();
        $role_student = Role::where('name', 'student')->first();


        //infosssss
        $firstname = 'Carl Dominic';
        $middlename = 'Tanghal';
        $lastname = 'Tan';
        $suffix = 'engg';
        $birthdate = '08/21/1998';
        $idNumber = '2011068991';
        $format = preg_replace('/\s+/', '', $firstname);

        /**
        //User Table
        $student = new User();
        $student->id_number = $idNumber;
        $student->last_name = $lastname;
        $student->first_name = $firstname;
        $student->middle_name = $middlename;
        $email = strtolower($format . '.' . $lastname . '.' . $suffix . '@ust.edu.ph');
        $student->birthdate = Carbon::parse($birthdate);
        $student->email = $email;
        $student->password = bcrypt($birthdate);
        $student->access_level = '1';
        $student->save();
        $student->roles()->attach($role_student);


        //UserStudent Table
        $studentData = new UserStudent();
        $studentData->student_number = $studentNumber;
        $studentData->last_name = $lastname;
        $studentData->first_name = $firstname;
        $studentData->middle_name = $middlename;
        $studentData->personal_email = 'cd.tan08@gmail.com';
        $studentData->save();

         */


        $admin = new User();
        $admin->id_number = $idNumber;
        $admin->last_name = $lastname;
        $admin->first_name = $firstname;
        $admin->middle_name = $middlename;
        $email = 'admin@ust.edu.ph';
        $admin->birthdate = Carbon::parse($birthdate);
        $admin->email = $email;
        $admin->password = bcrypt($birthdate);
        $admin->access_level = '1';
        $admin->save();
        $admin->roles()->attach($role_admin);



        
    }
}
