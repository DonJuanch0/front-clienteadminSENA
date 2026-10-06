<?php

namespace App\Http\Controllers;

class ComputerController extends ClientController
{
    public function index()
    {
        $computers = $this->get('/computers');

        return view('computers.index', compact('computers'));
    }

    public function show($id)
    {
        $computer = $this->get('/computers/' . $id);

        return view('computers.show', compact('computer'));
    }
}
