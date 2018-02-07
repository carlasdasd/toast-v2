<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfessor extends Model
{
    //

    protected $fillable = [
        'professor_number','last_name','first_name','middle_name',
    ];

    protected $primaryKey = 'id';


    public function users()
    {
        return $this->belongsToOne(User::class);
    }





}

