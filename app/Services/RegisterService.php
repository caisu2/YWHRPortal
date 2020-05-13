<?php


namespace App\Services;


use App\Models\User\JobHistory;
use App\Models\User\Profile;
use App\User;

class RegisterService
{

    public function createProfile(User $user, Profile $profile, JobHistory $jobHistory, $request)
    {
        $account = $user->saveUserAccount($request);
        $userProfile = $profile->saveProfile($account->id, $request);
        $jobHistory->saveJobHistory($userProfile->id, $request);

        return $jobHistory;
    }
}
