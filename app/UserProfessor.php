<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfessor extends Model
{

    protected $fillable = [
        'professor_number','last_name','first_name','middle_name','display_image','birthdate'
    ];

    protected $primaryKey = 'id';


    public function users()
    {
        return $this->hasOne(User::class,'id_number','professor_number');
    }

}

