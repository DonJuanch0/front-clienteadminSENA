<?php

namespace App\Http\Controllers;

class TrainingCenterController extends ClientController
{
    public function index()
    {
        // La API expone este recurso como /trainingcenters
        $trainingCenters = $this->get('/trainingcenters');

        return view('training-centers.index', compact('trainingCenters'));
    }

    public function show($id)
    {
        $trainingCenter = $this->get('/trainingcenters/' . $id);

        return view('training-centers.show', compact('trainingCenter'));
    }
}
