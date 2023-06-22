<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Hotel extends Model
{
    public $timestamps = false;

    public function rooms() {
        return $this->hasMany(Room::class);
    }
}
