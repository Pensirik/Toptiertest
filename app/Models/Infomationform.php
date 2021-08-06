<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infomationform extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name_th', 'last_name_th', 'first_name_en','last_name_en','gender','phone','address','email','citizenid','income'
    ];

}
