<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
        'Twitter', 
        'Facebook', 
        'Instagram', 
        'Cloud_Storage', 
        'Github', 
        'Address', 
        'Proffesion', 
        'Mobile_No', 

    ];
}
