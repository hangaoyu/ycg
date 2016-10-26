<?php

namespace App\Http\Controllers\Admin;

use App\Investor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvestorController extends Controller
{
    public function index()
    {

        $investor = Investor::first();

        return view('admin.investor', compact('investor'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'h_title' => 'required',
            'i_title' => 'required',
            'b_title' => 'required',
        ]);
        $investor = Investor::findorfail($id);

        $investor->update($request->all());

        return back()->with(['success'=> '修改成功']);
    }
}
