<?php

namespace App\Http\Controllers\Admin;

use App\Dynamic;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DynamicController extends Controller
{
    public function index()
    {
        return view('admin.dynamic');
    }

    public function dynamic_list()
    {
       $dynamics = Dynamic::all();
        return $dynamics;
    }
    public function delete_dynamic(Request $request){
        Dynamic::where('id',$request->get('id'))->delete();
        return 'ok';
    }
    public function edit_dynamic(Request $request){
        $id = $request->get('id');
        $dynamic = Dynamic::findorfail($id);
        $dynamic->update($request->all());
        return 'ok';
    }
    public function add_dynamic(Request $request){

        $dynamic = Dynamic::create($request->all());

        return $dynamic;
    }
}
