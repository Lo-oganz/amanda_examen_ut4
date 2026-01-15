<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class EstudianteController extends Controller
{
    public function create()
    {
        return view('admin.students.create');
    }

    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function store(Request $request)
    {
        // Validamos los datos recibidos
        $datos = $request->validate([
            'name' => 'required|string|max:50',
            'module' => 'required|string|max:60',
            'score' => 'required|integer|max:10',
        ]);

        Student::create([
            'name'     => $request->name,
            'module'    => $request->module,
            'score' => $request->score,
        ]);

        return redirect()->route('admin.students.create')->with('success', 'Calificación guardada');
        
    }
}
