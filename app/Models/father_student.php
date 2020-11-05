<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class father_student extends Model
{
    use HasFactory;
    protected $table = 'father_student';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name', 'father_lastname', 'mother_lastname','birthday','state_civil','email','phone','id_student',
        'direction'
    ];
}
