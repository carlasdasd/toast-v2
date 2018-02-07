<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisplayPicture extends Model
{
    //

    public function user_professors()
    {
        return $this->belongsToOne(User_Professor::class);
    }

    protected $fillable = [
        ''
    ];
}
