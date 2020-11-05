<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\father_student;
use App\Models\mother_student;
use Carbon\Carbon;

class studentController extends Controller
{
    //
    public function index(Request $request){
        $student = student::select('*')->get();
        return response()->json([
            'data' =>  $student,
        ]);
    }
    public function savestudents(Request $request){
        $arrays = $request->get('form');
        $arrayStudent = isset($arrays['student']) ? $arrays['student'] : null;
        $date = strtotime($arrayStudent['birthday']);
        $date = date('Y-m-d',$date);
        // Guardar Estudiante
        $student = student::updateOrCreate([
            'id'=> isset($arrayStudent['id']) ? $arrayStudent['id'] : null,
            'name'=> isset($arrayStudent['name']) ? $arrayStudent['name'] : NULL,
            'father_lastname' => isset($arrayStudent['father_lastname']) ? $arrayStudent['father_lastname'] : NULL,
            'mother_lastname' => isset($arrayStudent['mother_lastname']) ? $arrayStudent['mother_lastname'] : NULL,
            'age' => isset($arrayStudent['age']) ? $arrayStudent['age'] : NULL,
            'birthday' => isset($arrayStudent['birthday']) ? $date : NULL,
            'city' => isset($arrayStudent['city']),
            'state' =>  isset($arrayStudent['state']) ? $arrayStudent['state'] : NULL,
            'address' => isset($arrayStudent['address']) ? $arrayStudent['address'] : NULL,
            'school_name' => isset($arrayStudent['school_name'])  ? $arrayStudent['school_name'] : NULL,
            'grade' => isset($arrayStudent['grade']) ? $arrayStudent['grade'] : NULL,
        ]);
        
        if(isset($arrays['father']) && $student->id){
         $arrayFather = $arrays['father'];
         $date = strtotime($arrayFather['birthday']);
         $date = date('Y-m-d',$date);
         $father = father_student::where('id_student',$student->id);
         if(isset($father->id)){
             $father->delete();
         }
         $father = father_student::updateOrCreate([
             'id' => isset($arrayFather['id']) ? $arrayFather['id'] : null,
             'name' => isset($arrayFather['name']) ? $arrayFather['name'] : null,
             'father_lastname' => isset($arrayFather['father_lastname']) ? $arrayFather['father_lastname'] : null,
             'mother_lastname' => isset($arrayFather['moter_lastname']) ? $arrayFather['mother_lastname'] : null,
             'birthday' => isset($arrayFather['birthday']) ? $date : null,
             'state_civil' => isset($arrayFather['state_civil']) ? $arrayFather['state_civil'] : null,
             'email' => isset($arrayFather['email']) ? $arrayFather['email'] : null,
             'phone' =>isset($arrayFather['phone']) ? $arrayFather['phone'] : null,
             'id_student' => $student->id,
            'direction' => isset($arrayFather['direction']) ? $arrayFather['direction'] : null
         ]);
        }
        if(isset($arrays['mother']) && $student->id){
            $arrayMoter = $arrays['mother'];
            $date = strtotime($arrayMoter['birthday']);
            $date = date('Y-m-d',$date);
            $mother = mother_student::where('id_student',$student->id);
            if(isset($mother->id)){
                $mother->delete();
            }
            $mother = mother_student::updateOrCreate([
                'id' => isset($arrayMoter['id']) ? $arrayMoter['id'] : null,
                'name' => isset($arrayMoter['name']) ? $arrayMoter['name'] : null,
                'father_lastname' => isset($arrayMoter['father_lastname']) ? $arrayMoter['father_lastname'] : null,
                'mother_lastname' => isset($arrayMoter['moter_lastname']) ? $arrayMoter['mother_lastname'] : null,
                'birthday' => isset($arrayMoter['birthday']) ? $date : null,
                'state_civil' => isset($arrayMoter['state_civil']) ? $arrayMoter['state_civil'] : null,
                'email' => isset($arrayMoter['email']) ? $arrayMoter['email'] : null,
                'phone' =>isset($arrayMoter['phone']) ? $arrayMoter['phone'] : null,
                'id_student' => $student->id,
               'direction' => isset($arrayMoter['direction']) ? $arrayMoter['direction'] : null
            ]);
        }
        return $student;
    }
}
