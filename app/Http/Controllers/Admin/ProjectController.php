<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Project_Dynamic;
use App\Project_Holder;
use App\Project_Process;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::orderBy('updated_at', 'desc')->paginate(12);
        return view('admin.project', compact('projects'));
    }

    public function show(Project $project)
    {

        return view('admin.project_detail', compact('project'));


    }

    public function create()
    {
        $project = Project::create([
            'logo' => 'http://lorempixel.com/256/256/?85504',
            'name' => '未填写',
            'desrc' => '未填写',
            'body' => '未填写',
            'register_id' => '',
            'person' => '',
            'type' => '',
            'address' => '',
            'capital' => '',
            'state' => '',
            'create_at' => '',
        ]);

        return redirect()->action('Admin\ProjectController@show', ['id' => $project->id]);
    }


    public function destroy($id)
    {
        Project::where('id', $id)->delete();
        return 'delete';
    }

    public function changelogo(Request $request)
    {

        $destinationPath = '/storage/';
        $filename = request()->file('logo')->store('logo', 'public');
        $logo = asset($destinationPath . $filename);
        $project = \App\Project::where('id', $request->get('id'))->first();
        $project->logo = $logo;

        if ($project->update()) {
            return \Response::json([
                'success' => true,
                'logo' => asset($destinationPath . $filename),
                'image' => $destinationPath . $filename
            ]);
        }


    }

    public function base($id)
    {

        return \App\Project::where('id', $id)->first()->toArray();
    }

    public function changebase(Request $request, $id)
    {

        $project = Project::findorfail($id);
        $project->update($request->all());
        return 'ok';

    }

    public function holder($id)
    {
//        dd(Project_Holder::where('project_id',1)->get());
        return Project_Holder::where('project_id', $id)->get();
    }

    public function addholder(Request $request)
    {

        $newproject = Project_Holder::create($request->all());

        return $newproject;
    }

    public function editholder(Request $request)
    {
        $id = $request->get('id');
        $holder = Project_Holder::findorfail($id);
        $holder->update($request->all());
        return 'ok';
    }

    public function deleteholder(Request $request)
    {

        Project_Holder::where('id', $request->get('id'))->delete();
        return 'ok';
    }

    public function dynamic($id)
    {


        return Project_Dynamic::where('project_id', $id)->get();
    }

    public function add_dynamic(Request $request)
    {

        $newdynamic = Project_Dynamic::create($request->all());

        return $newdynamic;
    }


    public function deletedynamic(Request $request)
    {

        Project_Dynamic::where('id', $request->get('id'))->delete();
        return 'ok';
    }


    public function editdynamic(Request $request)
    {
        $id = $request->get('id');
        $dynamic = Project_Dynamic::findorfail($id);
        $dynamic->update($request->all());
        return 'ok';
    }


    public function process($id)
    {
//        dd(Project_Holder::where('project_id',1)->get());
        return Project_Process::where('project_id', $id)->get();
    }

    public function add_process(Request $request)
    {

        $newprocess = Project_Process::create($request->all());

        return $newprocess;
    }

    public function deleteprocess(Request $request)
    {

        Project_Process::where('id', $request->get('id'))->delete();
        return 'ok';
    }

    public function editprocess(Request $request)
    {
        $id = $request->get('id');
        $process = Project_Process::findorfail($id);
        $process->update($request->all());
        return 'ok';
    }
}
