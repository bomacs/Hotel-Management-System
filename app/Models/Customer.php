<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
use App\Models\Payment;
use App\Models\Bill;

class Customer extends Model
{
    public $timestamps = false;

    public function reservation() {
        return $this->hasMany(Reservation::class);
    }

    public function bill() {
        return $this->hasMany(Bill::class);
    }

    public function payment() {
        return $this->hasMany(Payment::class);
    }
}
