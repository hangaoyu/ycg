<?php

namespace App\Http\Controllers\Admin;

use App\Imgfile;
use EndaEditor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PostController extends Controller
{
    //markdown
    public function upload()
    {
        $data = EndaEditor::uploadImgFile('uploads');

        return json_encode($data);
    }

    //图片资源
    public function upload_img(Requests\ImgPostRequest $request)
    {

        $destinationPath = '/storage/';



        $filename = request()->file('img')->store('logo', 'public');
        $path = asset($destinationPath . $filename);
//        $request->get('type');
        $img = Imgfile::create(
            [   'type_id' => $request->get('type_id'),
                'imgsrc' => $path,
                'is_check' => 0,
                'desr' => 'picture'
            ]
        );

        return back()->with(['success'=>'提交成功','type_id'=>$request->get('type_id')]);
    }
}
