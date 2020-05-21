<?php

namespace App\Models\User;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

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


        $model = new self();
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
        $model->cv =  $request->file('cv')->store('public');
        $model->recent = $this->resizeImage($request->file('recent'))->basename;
        $model->audio = $this->saveAudio($request->file('audio'));
        $model->office = $this->resizeImage($request->file('office'))->basename;
        $model->internet = $this->resizeImage($request->file('internet'))->basename;
        $model->save();

        return $model;
    }

    public function getProfileById($id)
    {
        return self::find($id);
    }

    public function getProfileByUserId($id)
    {
        return self::where('user_id', '=', $id)->get();
    }

    public function getAllProfiles()
    {
        return self::where('is_hired', '=', 0)->get();
    }

    public function resizeImage($file, $with = 350, $height = 350)
    {
        $fileName = $file->getClientOriginalName();
        $img = Image::make($file->getRealPath())->resize($with, $height);
        $img->save(public_path().'/storage/'.$fileName, 60);
        return $img;
    }

    public function saveAudio($file)
    {
        $random = str::random(10);
        $filename = $random.'.'. $file->getClientOriginalExtension();
        $file->move('public/',$filename);

        return $filename;
    }
}
