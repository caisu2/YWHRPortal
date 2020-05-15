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
        return self::where('is_not_available', '=', 0)->get();
    }

    public function findAvailablePositionById($id)
    {
        return self::find($id);
    }

    public function saveAvailablePosition($request): AvailablePositions
    {
        $model = new self;
        $model->positions_desc = $request->position;
        $model->saveOrFail();
        return $model;
    }
}
