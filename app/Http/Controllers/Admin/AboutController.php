<?php

namespace App\Http\Controllers\Admin;

use App\About;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {

        $about = About::first();

        return view('admin.about', compact('about'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'production' => 'required',
            'healthy' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'postcode' => 'required',
            'address' => 'required',
        ]);
        $about = About::findorfail($id);

        $about->update($request->all());

        return back()->with(['success'=> '修改成功']);
    }

}
