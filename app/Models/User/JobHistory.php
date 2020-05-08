<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

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

    public function saveJobHistory(Profile $profile, $request): JobHistory
    {
        $model = new self;
        if (!empty($profile->id)) {
            $model->profile_id = $profile->id;
            $model->position = $request->position;
            $model->starting= $request->starting;
            $model->ending = $request->ending;
            $model->note = $request->note;
            $model->saveOrFail();
        }

        return $model;

    }

}
