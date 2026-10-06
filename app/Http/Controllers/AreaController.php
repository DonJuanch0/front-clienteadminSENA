<?php

namespace App\Http\Controllers;

class AreaController extends ClientController
{
    public function index()
    {
        $areas = $this->get('/areas');

        return view('areas.index', compact('areas'));
    }

    public function show($id)
    {
        $area = $this->get('/areas/' . $id);

        return view('areas.show', compact('area'));
    }
}
