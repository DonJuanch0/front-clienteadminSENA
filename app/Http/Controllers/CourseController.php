<?php

namespace App\Http\Controllers;

class CourseController extends ClientController
{
    public function index()
    {
        $courses = $this->get('/courses');

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = $this->get('/courses/' . $id);

        return view('courses.show', compact('course'));
    }
}
