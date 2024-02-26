<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Requests\CreateRequest;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        // Доработка - правильно именновать переменные, чтобы отражали смысл хранимых данных
        //$table = Groups::all();
        $groups = Group::all();
        return view('groups.index',['groups'=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/groups/create');
    }

    public function add(CreateRequest $request)
    {
        //dd($request);        

        $group = new Group();
        $group->title = $request->input('title');
        $group->start_from = $request->input('start_from');
        
        // Доработка - заменить громоздкую конструкцию проверки условия на input с дефолтным значением       
        $group->is_active = $request->input('is_active', false);

        $group->save();

        return redirect()->route('home')->with('success',"Новая группа успешно добавлена");
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
    public function show(Group $groups)
    {                
        //                
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {                 
        $group = Group::find($id);   
        $students = $group->students;         
        return view('/groups/details',['group'=>$group, 'students'=>$students]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Groups $groups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $groups)
    {
        //
    }
}
