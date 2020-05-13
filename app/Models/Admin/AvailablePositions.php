<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AvailablePositions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'available_positions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position_desc',
    ];

    public function getAllAvailablePosition()
    {
        return self::all();
    }
}
