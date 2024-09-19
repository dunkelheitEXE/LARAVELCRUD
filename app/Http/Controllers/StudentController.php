<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function getStudents() {
        $students = Students::all();
        $data = [
            'students' => $students,
            'status' => 200
        ];
        return view("homeView", $data);
    }

    public function signUp(Request $request)
    {
        // To Sign Up
        $validation = Validator::make($request->all(), [
            'student_name' => 'required',
            'student_lastname' => 'required',
            'student_surname' => 'required',
            'group' => 'required',
            'grade' => 'required',
            'career' => 'required',
        ]);

        if($validation->fails()) {
            $data = [
                'MESSAGE' => 'Validation Error. Data has not been sent correctly',
                'ERROR' => $validation->errors(),
                'Status' => 404
            ];
            return back()->with('error', $data);
        }

        $student = Students::create([
            'student_name' => $request->student_name,
            'student_lastname' => $request->student_lastname,
            'student_surname' => $request->student_surname,
            'group' => $request->group,
            'grade' => $request->grade,
            'career' =>$request->career
        ]);

        if(!$student) {
            $data = [
                "message" => "QUERY ERROR",
                "status" => 500
            ];

            return back()->with('error', $data);
        }

        $data = [
            'results' => $student,
            'status' => 200
        ];

        return view('SignUpView')->with('data', $data)->with('successMsg', "Student signed up successfully");
    }

    public function deleteStudent($id) {
        DB::table('students')->where('id', '=', $id)->delete();
        return view('DeletedView');
    }
}
