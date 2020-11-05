<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mother_student extends Model
{
    use HasFactory;
    protected $table = 'mother_student';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name', 'father_lastname', 'mother_lastname','birthday','state_civil','email','phone','id_student',
        'direction'
    ];
}
