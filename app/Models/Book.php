<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
    use HasFactory;
    protected $table = '_book';

    protected $fillable = [
        'department',
        'doctor_name',
        'name',
        'phone',
        'birthday',
        'time',
    ];
}
