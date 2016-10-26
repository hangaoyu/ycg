<?php

namespace App\Http\Controllers\Admin;

use App\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class AreaController extends Controller
{
    public function index()
    {

        $areas = Area::orderBy('updated_at', 'desc')->paginate(12);
        return view('admin.area', compact('areas'));
    }

    public function show(Area $area)
    {

        return view('admin.area_detail', compact('area'));
    }

    public function create()
    {
        $area = Area::create([
            'imgsrc' => 'http://lorempixel.com/256/256/?85504',
            'name' => '未填写',
            'address' => '未填写',
        ]);

        return redirect()->action('Admin\AreaController@show', ['id' => $area->id]);
    }


    public function destroy($id)
    {
        Area::where('id', $id)->delete();
        return 'delete';
    }

    public function change_avatar(Request $request)
    {

        $destinationPath = '/storage/';
        $filename = request()->file('avatar')->store('logo', 'public');
        $avatar = asset($destinationPath . $filename);
        $area = \App\Area::where('id', $request->get('id'))->first();
        $area->imgsrc = $avatar;

        if ($area->update()) {
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
            'address' => 'required',
       

        ]);
        $area = Area::findorfail($id);
        $area->update($request->all());
        return back()->with('success','修改成功');
    }

}
