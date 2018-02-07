<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'student';
        $role_admin->save();
        
        $role_prof = new Role();
        $role_prof->name='professor';
        $role_prof->save();
        
        $role_student = new Role();
        $role_student->name='administrator';
        $role_student->save();
    }
}
