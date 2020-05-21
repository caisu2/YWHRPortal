<?php


namespace App\Services;


use App\Admin\AvailablePositions;
use App\Models\User\JobHistory;
use App\Models\User\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeService
{


    public function dashboardView(Profile $profile, $access)
    {


        if ($access === 0){
            $service = new UserService();
            $userProfile = $service->showProfile(new Profile(), new JobHistory(), Auth::user()->id);
            return [
                'userProfile' => $userProfile,
                'datas' => $profile->getAllProfiles()
            ];
        }else{
            return $profile->getAllProfiles();

        }

    }

    public function getAllAvailablePosition(AvailablePositions $availablePositions)
    {
        return $availablePositions->getAllAvailablePosition();
    }
}
