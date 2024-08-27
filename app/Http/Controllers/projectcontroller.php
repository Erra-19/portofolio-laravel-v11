<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class projectcontroller extends Controller
{
    public function index()
    {
        return view('tambah');
    }

    public function project()
    {
        $project = project::all();
        return view('project', ['project' => $project]);
    }
}