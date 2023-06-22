<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;
use App\Models\Customer;

class Payment extends Model
{
    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function bill() {
        return $this->belongsTo(Bill::class);
    }
}
