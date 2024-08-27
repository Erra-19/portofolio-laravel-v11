<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\project;

class viewcontroller extends Controller
{
    public function tambahproject(Request $request)
    {
        project::create(
            [
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            ]
        );
    return redirect('/project');
    }

    public function deleteproject($id){
        $project = project::find($id);
        if ($project){
            $project->delete();
        }
        return redirect('/project');
    }
}
