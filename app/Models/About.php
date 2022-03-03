<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'Professional_Heading',
        'Subheading',
        'Short_Description',
        'Long_Description',
        'Date_of_Birth',
        'Website',
    ];
}
