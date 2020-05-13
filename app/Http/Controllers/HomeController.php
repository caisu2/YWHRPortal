<?php

namespace App\Http\Controllers;

use App\Models\User\Profile;
use App\Services\HomeService;
use App\Services\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Psr7\uri_for;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $service;

    public function __construct(HomeService $homeService)
    {
        $this->middleware('auth');
        $this->service = $homeService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        $data = $this->service->dashboardView(new Profile());
        return view('dashboard', [
            'datas' => $data
        ]);
    }
}
