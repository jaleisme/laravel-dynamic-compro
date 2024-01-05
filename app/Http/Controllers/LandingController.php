<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Layanan;
use App\Models\Maps;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

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
}
