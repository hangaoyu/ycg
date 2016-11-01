<?php

namespace App\Http\Controllers\Admin;

use App\Markdown\Markdown;
use App\WelfareItem;
use App\WelfareType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PublicWelfareController extends Controller
{
    public function __construct(Markdown $markdown)
    {
        $this->makedown = $markdown;
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.publicwelfare');
    }

    public function item_detail($id)
    {
        $item = WelfareItem::where('id', $id)->first();
        return view('admin.public_item_detail', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'at_where' => 'required',
            'desrc' => 'required',
            'address' => 'required',
        ]);

        $item = WelfareItem::findorfail($id);
        $item->update($request->all());
        return back()->with('success', '修改成功');
    }

    public function change_avatar(Request $request)
    {

        $destinationPath = '/storage/';
        $filename = request()->file('avatar')->store('logo', 'public');
        $avatar = asset($destinationPath . $filename);
        $item = WelfareItem::where('id', $request->get('id'))->first();
        $item->img_src = $avatar;
        if ($item->update()) {
            return \Response::json([
                'success' => true,
                'avatar' => asset($destinationPath . $filename),
                'image' => $destinationPath . $filename
            ]);
        }
    }

    public function type_list()
    {
        $types = WelfareType::all();
        return $types;
    }

    public function item_list($id)
    {
        $items = WelfareItem::where('type_id', $id)->get();
        return $items;
    }

    public function delete_item(Request $request)
    {
        $item = WelfareItem::where('id', $request->get('id'))->delete();
        return 'ok';
    }
}
