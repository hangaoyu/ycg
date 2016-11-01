<?php

namespace App\Http\Controllers;

use App\About;
use App\Area;
use App\Dynamic;
use App\Finance;
use App\Imgfile;
use App\Investor;
use App\Markdown\Markdown;
use App\Project;
use App\Teacher;
use App\Timeline;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\DomCrawler\Crawler;

class MainController extends Controller
{

    public function __construct(Markdown $markdown)
    {
        $this->makedown = $markdown;
    }

    //
    public function index()
    {
        $projects = Project::limit(12)->get();
        $areas = Area::limit(3)->get();
        $teachers = Teacher::all();
        $t = Teacher::first();
        foreach ($teachers as $teacher){
            $teacher->body = $this->makedown->markdown($teacher->body);
        }
        $events = Timeline::All();
        $partners = Imgfile::where('type_id', 8)->get();
        $finances = Finance::limit(6)->get();
        $dynamics = Dynamic::All();
        $event_count = Timeline::count();
        $dynamic_count = Dynamic::count();
        return view('main.home', compact('projects', 'areas', 'events', 'partners', 'teachers', 'finances','html','dynamics','event_count','dynamic_count'));
    }

    public function show_project($id)
    {
        $project = Project::findorfail($id);
        return view('main.project', compact('project'));
    }

    public function show_finance($id)
    {
        $finance = Finance::findorfail($id);
        return view('main.finance_detail', compact('finance'));
    }


    public function about()
    {
        $events = Timeline::limit(5)->get();
        $base = About::first();

        return view('main.about', compact('base', 'events'));
    }

    public function investor()
    {

        $base = Investor::first();
        return view('main.investor', compact('base'));
    }


}
