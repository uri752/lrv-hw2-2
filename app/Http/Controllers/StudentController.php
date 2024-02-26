<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequestStudent;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Внтури контролера мы объединяем работу модели и представления (Model -> View)
        return view('student.index', ['surname'=>'SurName']); 
        // 2 параметра - 1) путь до шаблона относительно директории views, 2) набор переменных в виде массива
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($group_id)
    {        
        return view("/students/create",['group'=>$group_id]);
    }

    public function add(CreateRequestStudent $request, $group)
    {                        
        $stident = new Student();
        $stident->group_id = $group;
        $stident->surname = $request->input('surname');
        $stident->name = $request->input('name');
                
        $stident->save();        
        
        return redirect()->route("groups.details",['group'=>$group])->with('success',"Новый студент успешно добавлен");
        //return "";
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //public function edit(Students $students)
    public function edit($group, $student)
    {
        $student_data = Student::find($student);           
        return view('/students/details',['student_data'=>$student_data]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $students)
    {
        //
    }
}
