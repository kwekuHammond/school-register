<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //defines table name
    protected $table = 'student';

    //use HasFactory;
    protected $fillable = [
        'student_id','fullname', 'gender',
        'date_of_birth','pupil_class',
        'place_of_residence','email',
        'religion', 'profile_image'
    ];

}
