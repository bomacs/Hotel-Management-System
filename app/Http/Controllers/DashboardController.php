<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Customer;
use App\Models\Reservation;
use App\Models\Bill;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'hotels' => Hotel::all(),
            'rooms' => Room::all(),
            'customers' => Customer::all(),
            'reservations' => Reservation::all(),
            'bills' => Bill::all(),
            'payments' => Payment::all(),
        ]);
    }
}
