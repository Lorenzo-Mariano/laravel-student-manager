<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'year_section',
        'age',
        'contact_number',
        'address',
        'mother_name',
        'father_name',
        'gender',
    ];
}
