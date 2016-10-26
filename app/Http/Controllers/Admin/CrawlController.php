<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\DomCrawler\Crawler;

class CrawlController extends Controller
{
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
