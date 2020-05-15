<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Kint;

class JobHistory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_history';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'positions', 'starting', 'ending', 'note'
    ];

    public function saveJobHistory($profile, $request): JobHistory
    {
        foreach ($request->position as $key => $value) {
            if ($request->position[$key]){
                $model = new self;
                $model->profile_id = $profile;
                $model->position = $request->position[$key];
                $model->starting = $request->starting[$key];
                $model->ending = $request->ending[$key];
                $model->note = $request->note[$key];
                $model->save();
            }
        }
        return $model;

    }

    public function getAllJobHistoryByProfileId($id)
    {
        return self::where('profile_id', '=', $id)->get();
    }

}
