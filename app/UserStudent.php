<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStudent extends Model
{

    protected $fillable = [
        'student_number','last_name','first_name','middle_name','birthdate', 'email', 'password',
    ];

    protected $primaryKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function users()
    {
        return $this->belongsToOne(User::class);
    }
}
