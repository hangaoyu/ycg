<?php

namespace App\Http\Controllers\Admin;


use App\Imgfile;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class CarouselController extends Controller
{
    //
    public function category()
    {
        $types = Type::pluck('name', 'id');
        return view('admin.carousel', compact('carousel', 'types'));
    }

    public function getfilelist($type_id)
    {


        return Imgfile::where('type_id', $type_id)->get();
    }

    public function get_typelist()
    {

        return Type::get();
    }

    public function check_carousel(Request $request)
    {
        $id = $request->get('id');
        $carousel = Imgfile::findorfail($id);
        $carousel->update($request->all());
        return 'ok';
    }

    public function addfile(Request $request)
    {
        $destinationPath = '/storage/';
        dd('asdas');
        $filename = request()->file('file')->store('logo', 'public');
        return 'ok';
    }

    public function delete_carousel(Request $request)
    {
        Imgfile::where('id', $request->get('id'))->delete();
        return $request->get('id');
      
    }

    public function crawl()
    {
        $url = "http://www.ebrun.com/qpd/62.html";
        $fcontents = file_get_contents($url);
        $crawler = new Crawler($fcontents);

        $nodeValues = $crawler->filter('.chanlDiv dl ')->each(function (Crawler $node, $i) {

            $d_url = ($node->filter('dt a ')->attr('href'));
            $d_content = file_get_contents($d_url);
            $d_crawler = new Crawler($d_content);
            $container = $d_crawler->filter('.contdiv')->html();
            $author = $d_crawler->filter('.zsp span')->first()->text();
            $time = $d_crawler->filter('.zsp span')->last()->text();

            \App\Finance::create([
                'title' => ($node->filter('dt a ')->attr('title')),
                'imgsrc' => ($node->filter('dt a img')->attr('src')),
                'desrc' => ($node->filter('dd p')->text()),
                'content' => $container,
                'time' => $time,
                'author'=>$author,
                'other'=>'wait'
            ]);

        });
    }
}
