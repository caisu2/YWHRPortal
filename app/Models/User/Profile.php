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


    public function saveProfile(User $user, $request): Profile
    {
        $width = '100';
        $height = '100';
        $model = new self;
        $model->user_id = $user->id;
        $model->name = $request->name;
        $model->status = $request->status;
        $model->age = $request->age;
        $model->address = $request->address;
        $model->cellphone_no = $request->cellphone_no;
        $model->salary = $request->salary;
        $model->objectives =  $request->objectives;
        $model->office_desc =  $request->office_desc;
//        $model->cv = $data['cv']->file('public');
//        $model->recent = $data['recent']->file('public');
//        $model->audio = $data['audio']->file('public');
//        $model->office = $data['office']->file('public');
//        $model->internet = Storage::putFile('avatars',$data['cv']);
        $model->saveOrFail();

        return $model;
    }
}
