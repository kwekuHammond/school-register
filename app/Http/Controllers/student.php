<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Illuminate\Support\Facades\Auth,
    App\Models\student as StudentData,
    Illuminate\Validation\Rule,
    Illuminate\Pagination\Paginator,
    Illuminate\Support\Facades\DB;

class student extends Controller
{
    //Checks if user is logged in & Returns Student-List View
    public function Student_list_View(){

            Paginator::useBootstrap();
            return view('/student-list')->with([
                'user_name'=> Auth::user()->fullname,
                'StudentList'=>StudentData::latest()->paginate(5)
            ]);
    }

    public function AddNewStudent(Request $request){
        if(Auth::check()){
            $FormFields = $request->validate([
                'student_id'=>['required', Rule::unique('student', 'student_id')],
                'fullname'=> 'required',
                'pupil_class'=>'required',
                'gender'=>'required',
                'date_of_birth'=>'required',
                'place_of_residence'=>'required',
                'email'=>['required', 'email', Rule::unique('student', 'email')],
                'religion'=>'required'
            ]);

            if($request->hasFile('profile_image'))
            {
                $FormFields['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
            }

            StudentData::create($FormFields);
            return redirect('/add-new-student')->with('message', 'New Student Added Successfully!');
        }
        else{
            return redirect('/');
        }
    }

    public function DeleteStudent(StudentData $id)
    {
        if(!auth()->check())
            return redirect('/');

        $id->delete();
        return redirect('/student-list')->with('message', 'Student Deleted Successfully!');
    }

    public function AddNewStudentView(StudentData $student)
    {
        // if(!auth()->check())
        //     return redirect('/');

        return view('add-new-student')->with(['user_name'=> Auth::user()->fullname, 'student'=>$student]);
    }

    public function UpdateStudentData(Request $request)
    {
        if(!auth()->check())
            return redirect('/');

        $FormFields = $request->validate([
            'id'=>'required',
            'student_id'=>'required',
            'fullname'=> 'required',
            'pupil_class'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'place_of_residence'=>'required',
            'email'=>['required', 'email'],
            'religion'=>'required'
        ]);

        if($request->hasFile('profile_image'))
        {
            $FormFields['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
        }
            $student = StudentData::find($FormFields['id']);
            $student->update($FormFields);
            return back()->with('message', 'Student Data Updated Successfully!');
    }

    public function search_student(Request $request)
    {
        if(!auth()->check())
            return redirect('/');

        $KeyWord = $request->validate(['keyword'=>'required']);
        Paginator::useBootstrap();
        $student = StudentData::where('fullname', 'LIKE', '%'.$KeyWord['keyword'].'%')->latest()->paginate(5);
        return view('/student-list')->with('StudentList', $student);
    }
}
