<?php

namespace App\Models\Admin;

use App\Models\User\Profile;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'marital_status';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_desc',
    ];


    public function Profile()
    {
        return $this->belongsTo(Profile::class, 'id');
    }

    public function getAllMaritalStatus()
    {
        return self::all();
    }
}
