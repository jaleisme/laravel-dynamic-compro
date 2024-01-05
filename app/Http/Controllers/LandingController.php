<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Alasan;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Layanan;
use App\Models\Maps;
use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $hero = Hero::where('is_active', 1)->get();
        $alasan = Alasan::where('is_active', 1)->first();
        $layanan = Layanan::where('is_active', 1)->get();
        $client = Client::where('is_active', 1)->get();
        $gallery = Gallery::where('is_active', 1)->get();
        $map = Maps::where('is_active', 1)->first();
        return ($hero->count() >= 0 || $alasan->count() >= 0 || $client->count() >= 0 || $gallery->count() >= 0 || $map->count() >= 0 ) ? view('welcome', compact(['hero', 'alasan', 'layanan', 'client', 'gallery', 'map'])) : "<code> You haven't setup the landing page! Sign in to the admin panel <a href='/admin/home'>here</a></code>";
        // return view('welcome', compact(['hero', 'alasan', 'layanan', 'client', 'gallery', 'map']));
    }

    public function about(){
        $about = About::first();
        return view('about', compact(['about']));
    }

    public function projects(){
        $data = DB::table('project')->select('project.*', 'project_category.name AS category_name')->join('project_category', 'project_category.id', '=', 'project.category_id')->get()->groupBy('project.id');
        $data = Collection::unwrap($data);
        $data = reset($data);
        $projects = $data;
        // dd($projects);
        return view('projects', compact(['projects']));
    }
}
