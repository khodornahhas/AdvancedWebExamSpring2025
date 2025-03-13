<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.create',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = Course::create([
            'name'=>$request->name,
             'description' => $request->description,
         ]);
         return redirect(route('courses.create'))->with('success','Course has been added successfully!');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course($id);
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('coruse')); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = course::find($id); 
    
        $course->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        return redirect(route('courses.create'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = course::find($id);
        $course -> delete();
        return redirect(route('courses.index'))->with('success','course has been deleted successfully!');
    }
}
