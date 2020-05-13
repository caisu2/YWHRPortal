<?php


namespace App\Services;
use App\Models\User\JobHistory;
use App\Models\User\Profile;
use App\User;

class AdminService
{


    public function showProfile(Profile $profile, JobHistory $jobHistory, $id)
    {
        $modelProfile = $profile->getProfileById($id);
        $modelJobHistory = $jobHistory->getAllJobHistoryByProfileId($modelProfile->id);

        return [
            'profile' => $modelProfile,
            'jobhistory' => $modelJobHistory
        ];
    }

    public function hireApplicant(Profile $profile, $id)
    {
        $model = $profile->getProfileById($id);
        $model->is_hired = 1;
        $model->saveOrFail();

        return $model;
    }
}
