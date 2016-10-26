<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class TeacherController extends Controller
{
    public function index()
    {

        $teachers = Teacher::orderBy('updated_at', 'desc')->paginate(12);
        return view('admin.teacher', compact('teachers'));
    }

    public function show(Teacher $teacher)
    {

        return view('admin.teacher_detail', compact('teacher'));
    }

    public function create()
    {
        $teacher = Teacher::create([
            'avatar' => 'http://lorempixel.com/256/256/?85504',
            'name' => '未填写',
            'job' => '未填写',
            'desrc' => '未填写',
            'body' => '未填写',
            'e_name' => '未填写',
        ]);

        return redirect()->action('Admin\TeacherController@show', ['id' => $teacher->id]);
    }


    public function destroy($id)
    {
        Teacher::where('id', $id)->delete();
        return 'delete';
    }

    public function change_avatar(Request $request)
    {

        $destinationPath = '/storage/';
        $filename = request()->file('avatar')->store('logo', 'public');

        $avatar = asset($destinationPath . $filename);
        $teacher = \App\Teacher::where('id', $request->get('id'))->first();
        $teacher->avatar = $avatar;

        if ($teacher->update()) {
            return \Response::json([
                'success' => true,
                'avatar' => asset($destinationPath . $filename),
                'image' => $destinationPath . $filename
            ]);
        }
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'e_name' => 'required',
            'desrc' => 'required',
            'job' => 'required',
            'body' => 'required',


        ]);
        $teacher = Teacher::findorfail($id);
        $teacher->update($request->all());
        return back()->with('success', '修改成功');
    }


}
