<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'Siteicon', 
        'Website_Title', 
        'Keywords', 
        'Site_Description', 

    ];
}
