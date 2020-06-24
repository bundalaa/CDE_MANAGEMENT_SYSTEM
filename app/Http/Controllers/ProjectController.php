<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class ProjectController extends Controller
{
    public function getProjects()
    {
        $Project = Project::all();

        if (REQ::is('api/*'))
            return response()->json(['Project' => $Project], 201);
        //for web route
        return view('welcome',);
    }

    public function getProject($projectId)
    {
        $Project = Project::find($projectId);

        if (!$Project) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Project not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Project' => $Project]);

        ///web route
        return view();
    }

    public function postProject(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);



        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }




        $Project = new Project();

        $Project->name = $request->input('name');
        $Project->description = $request->input('description');

        $Project->save();

        if (REQ::is('api/*'))
            return response()->json(['Project' => $Project]);

        //for web route
        return view();
    }

    public function putProject(Request $request, $projectId)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $Project = Project::find($projectId);

        if (!$Project) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Project not found']);
        }


        $Project->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Project' => $Project]);

        //for web route
        return view();
    }

    public function deleteProject($projectId)
    {
        $Project = Project::find($projectId);

        if (!$Project) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Project not found']);
        }

        $Project->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Project deleted successfully']);

        ///web route
        return view();
    }
}
