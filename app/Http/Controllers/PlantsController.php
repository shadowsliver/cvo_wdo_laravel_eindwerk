<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plant;

use App\Http\Requests;

class PlantsController extends Controller
{
    public function index()
    {
        $plants = Plant::all();

        return view('plant.index', compact('plants'));
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroyConfirm()
    {

    }

    public function destroy()
    {

    }
}
