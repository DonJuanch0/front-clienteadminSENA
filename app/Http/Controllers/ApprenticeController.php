<?php

namespace App\Http\Controllers;

class ApprenticeController extends ClientController
{
    public function index()
    {
        $apprentices = $this->get('/apprentices');

        return view('apprentices.index', compact('apprentices'));
    }

    public function show($id)
    {
        $apprentice = $this->get('/apprentices/' . $id);

        return view('apprentices.show', compact('apprentice'));
    }
}
