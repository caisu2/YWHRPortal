<?php


namespace App\Services;
use App\Models\Admin\AvailablePositions;
use App\Models\User\JobHistory;
use App\Models\User\Profile;
use App\User;

class AdminService
{


    public function showProfile(Profile $profile, JobHistory $jobHistory , $id): array
    {
        $modelProfile = $profile->getProfileById($id);
        $modelJobHistory = $jobHistory->getAllJobHistoryByProfileId($modelProfile->id);
        return [
            'profile' => $modelProfile,
            'jobhistory' => $modelJobHistory
        ];
    }

    public function profileAttactmentsToArray(Profile $profile, $id)
    {
        $modelJobHistory = $profile->getProfileById($id);
        $cv = explode('/', $modelJobHistory->cv);
        $recent = explode('/', $modelJobHistory->recent);
        $internet = explode('/', $modelJobHistory->internet);
        $office = explode('/', $modelJobHistory->office);
        $audio = explode('/', $modelJobHistory->audio);
        return [
            'cv' => $cv[1],
            'recent' => $recent[1],
            'internet' => $internet[1],
            'office' => $office[1],
            'audio' => $audio[1],
        ];
    }

    public function hireApplicant(Profile $profile, $id)
    {
        $model = $profile->getProfileById($id);
        $model->is_hired = 1;
        $model->saveOrFail();

        return $model;
    }

    public function getAvailablePosition(AvailablePositions $availablePositions)
    {
        return $availablePositions->getAllAvailablePosition();
    }

    public function updateAvailablePosition(AvailablePositions $availablePositions, $id)
    {
        $model = $availablePositions->findAvailablePositionById($id);
        $model->is_not_available = 1;
        $model->saveOrFail();

        return $model;
    }

    public function saveAvailablePosition(AvailablePositions $availablePositions, $request): AvailablePositions
    {
        return $availablePositions->saveAvailablePosition($request);
    }

    public function showProfilePdf(Profile $profile, $id)
    {
        $model = $profile->getProfileById($id);
        $response = explode('/', $model->cv);
        return $response[1];
    }
}
