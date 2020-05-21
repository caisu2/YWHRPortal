<?php

namespace App\Http\Controllers;

use App\Models\User\Profile;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function showCV(Request $request)
    {
        $filename = $this->service->showProfilePdf(new Profile(), $request->id);
//        var_dump($path);die;
        return response()->json($filename);
    }

    public function showAudio(Request $request)
    {
        $filename = $this->service->showProfileAudio(new Profile(), $request->id);

        return response()->json($filename);
    }
}
