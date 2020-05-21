<?php

namespace App\Http\Controllers;

use App\Admin\AvailablePositions;
use App\Services\HomeService;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public $service;

    public function __construct(HomeService $homeService)
    {
        $this->service = $homeService;
    }

    public function landingPage()
    {
        $data = $this->service->getAllAvailablePosition(new AvailablePositions());

        return view('landing_page', [
            'data' => $data
        ]);
    }
}
