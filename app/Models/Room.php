<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
use App\Models\Hotel;

class Room extends Model
{
    public $timestamps = false;

    public function reservation() {
        return $this->hasMany(Reservation::class);
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
