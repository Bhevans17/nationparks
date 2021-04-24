<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RandomParksController extends Controller
{
    public function index()
    {
        // GET NPS /parks conver to JSON
        $response = Http::get('https://developer.nps.gov/api/v1/parks?api_key=HkISxGJHwD8hh2h6K8VTE5SevsAMu4yL2K4OU8xc');
        $response->json();

        // Set pagination variables
        $total = $response['total'];
        $limit = $response['limit'];
        $start = $response['start'];

        // Store data
        $data = $response['data'];

        return view('random-parks', ['parks' => $data]);
    }

    public function show($park)
    {
        return view('park', [
            'park' => $park
        ]);
    }
}
