<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
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
        $model = new self;
        if (!empty($profile)) {
            foreach ($request->position as $key => $value) {
                if ($request->position[$key]){
                    $model->profile_id = $profile;
                    $model->position = $request->position[$key];
                    $model->starting= $request->starting[$key];
                    $model->ending = $request->ending[$key];
                    $model->note = $request->note[$key];
                    $model->saveOrFail();
                }
            }
        }

        return $model;

    }

    public function getAllJobHistoryByProfileId($id)
    {
        $model = self::where('profile_id', '=', $id)->get();
        return $model;
    }

}
