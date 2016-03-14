<?php

namespace App\Http\Controllers;
use App\Plant;
use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;

class PlantsController extends Controller
{
    public function index()
    {
        $plants = Plant::all();
        return view('plant.index', compact('plants'));
    }

    public function show( $id )
    {
        $plants = Plant::findOrFail($id);
        return view('plant.show', compact('plant'));
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
