<?php


namespace App\Services;


use App\Models\User\Profile;
use App\User;

class HomeService
{


    public function dashboardView(Profile $profile)
    {
        return $profile->getAllProfiles();
    }
}
