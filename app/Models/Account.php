<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public $table = "accounts";
    protected $fillable = ['f_name','l_name','dob','phone','email','address','hobby','gender','country'];
}
