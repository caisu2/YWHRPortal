<?php

namespace App\Models\User;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Profile extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'age', 'address', 'cellphone_no', 'salary', 'objectives', 'background', 'cv',
    ];
    /**
     * @var mixed
     */
    private $id;


    public function JobHistory(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(JobHistory::class, 'id');
    }


    public function saveProfile($user, $request): Profile
    {
        $width = '100';
        $height = '100';
        $model = new self;
        $model->user_id = $user;
        $model->name = $request->name;
        $model->status = $request->status;
        $model->age = $request->age;
        $model->address = $request->address;
        $model->cellphone_no = $request->cellphone_no;
        $model->salary = $request->salary;
        $model->objectives =  $request->objectives;
        $model->office_desc =  $request->office_desc;
        $model->background = $request->background;
        $model->cv = $request->file('cv')->store('public');
        $model->recent =  $request->file('recent')->store('public');
        $model->audio =  $request->file('audio')->store('public');
        $model->office =  $request->file('office')->store('public');
        $model->internet =  $request->file('internet')->store('public');
        $model->saveOrFail();

        return $model;
    }

    public function getProfileById($id)
    {
        return self::find($id);
    }

    public function getAllProfiles()
    {
        return self::where('is_hired', '=', 0)->get();
    }
}
