<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name', 'father_lastname', 'mother_lastname','age','birthday','city','state','address','school_name',
        'grade'
    ];

}
