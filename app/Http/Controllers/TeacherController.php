<?php

namespace App\Http\Controllers;

class TeacherController extends ClientController
{
    public function index()
    {
        $teachers = $this->get('/teachers');

        return view('teachers.index', compact('teachers'));
    }

    public function show($id)
    {
        $teacher = $this->get('/teachers/' . $id);

        return view('teachers.show', compact('teacher'));
    }
}
