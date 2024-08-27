<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class updatecontroller extends Controller
{
    public function showUpdateForm($id)
    {
        $project = Project::find($id);
        return view('update', ['project' => $project]);
    }

    public function updateproject(Request $request, $id)
    {
        $project = Project::find($id);
        $project->update([
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
        ]);

        return redirect('/project');
    }
}
