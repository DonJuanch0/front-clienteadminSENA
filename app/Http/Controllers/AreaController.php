<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $this->post('/areas', $request->all());
        return redirect('/areas');
    }

    public function destroy($id)
    {
        $this->delete ('/areas/' . $id);
        return redirect ('/areas');
    }
}
