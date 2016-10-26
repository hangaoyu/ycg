<?php

namespace App\Http\Controllers\Admin;

use App\Timeline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;


class EventController extends Controller
{
    public function index()
    {

        $events = Timeline::orderBy('updated_at', 'desc')->paginate(12);
        return view('admin.event', compact('events'));
    }

    public function show(Timeline $event)
    {

        return view('admin.event_detail', compact('event'));
    }

    public function create()
    {
        $event = Timeline::create([
            'body' => '未填写',
            'imgsrc' => 'http://lorempixel.com/256/256/?85504',
            'time' => '未填写',
            'detail' => '未填写',

        ]);

        return redirect()->action('Admin\EventController@show', ['id' => $event->id]);
    }


    public function destroy($id)
    {
        Timeline::where('id', $id)->delete();
        return 'delete';
    }

    public function change_avatar(Request $request)
    {

        $destinationPath = '/storage/';
        $filename = request()->file('avatar')->store('logo', 'public');
        $avatar = asset($destinationPath . $filename);
        $event = \App\Timeline::where('id', $request->get('id'))->first();
        $event->imgsrc = $avatar;

        if ($event->update()) {
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
            'time' => 'required',
            'detail' => 'required',


        ]);
        $event = Timeline::findorfail($id);
        $event->update($request->all());
        return back()->with('success', '修改成功');
    }

}
