<?php


namespace App\Services;


use App\Models\User\JobHistory;
use App\Models\User\Profile;

class UserService
{
    public function showProfile(Profile $profile, JobHistory $jobHistory, $id)
    {
        $modelProfile = $profile->getProfileByUserId($id);
        $modelJobHistory = $jobHistory->getAllJobHistoryByProfileId($modelProfile[0]->id);
        return [
            'profile' => $modelProfile,
            'jobhistory' => $modelJobHistory
        ];
    }

    public function showProfilePdf(Profile $profile, $id)
    {
        $model = $profile->getProfileById($id);
        $response = explode('/', $model->cv);
        return $response[1];
    }

    public function showProfileAudio(Profile $profile, $id)
    {
        return $profile->getProfileById($id)->audio;
    }
}
