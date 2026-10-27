<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image');

        Http::attach(
            'image',
            file_get_contents($image->getRealPath()),
            $image->getClientOriginalName()
        )->post(config('app.url_api') . '/computers');

        return redirect('/computers');
    }
}
