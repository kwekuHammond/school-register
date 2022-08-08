<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //use HasFactory;

    protected $fillable = ['fullname', 'email', 'password'];

    //Relationship to student
    // public function students(){
    //     return $this->hasMany(student::class, 'users_id');
    // }
}
