<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'Category', 
        'Course_Position', 
        'Institute',
        'Duration',
        'Description',
    ];
}
