<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request) {
        $students = Student::where('name', 'like', '%' . $request->search . '%')
            ->orWhere('desscription', 'like', '%' . $request->search . '%')

            ->get();
        $output = '';
            foreach ($students as $student) {
                $output .= '
                <tr>
                    <div>' . $student->id . '</div>
                    <div>' . $student->name . '</div>
                    <div>' . $student->description . '</div>
                     <div>
                        <a href="' . route('students.edit', $student->id) . '">Edit</a>
                    </div>
                    <div>
                        <form action="' . route('students.destroy', $student->id) . '" method="post">
                            ' . csrf_field() . '
                            ' . method_field('delete') . '
                            <button type="submit">Delete</button>
                        </form>  
                    </div>
                </tr>';
            }
        return response($output);
        }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
