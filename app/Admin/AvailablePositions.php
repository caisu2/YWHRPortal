<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class AvailablePositions extends Model
{


    public function getAllAvailablePosition()
    {
        return self::where('is_not_available', '=', 0)->get();
    }
}
