<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;


class WelcomeController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('welcome/index', compact('students'));
    }

    public function createStudent(Request $request)
    {
        $pathAvatar = null;

        if ($request->hasFile('avatar')) {
            $pathAvatar = $request->file('avatar')->store('public');
        }

        $student = new Student([
            'name' => $request->get('name'),
            'avatar' => $pathAvatar
        ]);
        
        $student->save();
        
        return redirect('/');
    }
}