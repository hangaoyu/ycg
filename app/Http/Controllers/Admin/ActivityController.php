<?php

namespace App\Http\Controllers\Admin;

use App\ActivityItem;
use App\ActivityType;
use App\Markdown\Markdown;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function __construct(Markdown $markdown)
    {
        $this->makedown = $markdown;
        $this->middleware('auth');
    }

    public function item_detail($id)
    {
        $item = ActivityItem::where('id', $id)->first();
        return view('admin.activity_item_detail', compact('item'));
    }

    public function index()
    {
        return view('admin.activity');
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'address' => 'required',
            'desrc' => 'required',
            'process' => 'required',
        ]);

        $item = ActivityItem::findorfail($id);
        $item->update($request->all());
        return back()->with('success', '修改成功');
    }


    public function type_list()
    {
        $types = ActivityType::all();
        return $types;
    }

    public function item_list($id)
    {
        $items = ActivityItem::where('type_id', $id)->get();
        return $items;
    }

    public function delete_item(Request $request)
    {
        $item = ActivityItem::where('id', $request->get('id'))->delete();
        return 'ok';
    }
    public function change_avatar(Request $request)
    {

        $destinationPath = '/storage/';

        $filename = request()->file('avatar')->store('logo', 'public');
        $avatar = asset($destinationPath . $filename);
        $item = ActivityItem::where('id', $request->get('id'))->first();
//        $item->img_src = $avatar;
        $type = $request->get('type');
        $type == 'small'?  $item->img_src = $avatar:$item->big_img_src=$avatar;
        if ($item->update()) {
            return \Response::json([
                'success' => true,
                'type'=>$type,
                'avatar' => asset($destinationPath . $filename),
                'image' => $destinationPath . $filename
            ]);
        }
    }

}
