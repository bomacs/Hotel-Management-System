<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{table: 'hotels'}" class="bg-gray-100 flex">
    <aside class="relative bg-blue-500  h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6 border-b-2" >
            <a href="/" class="text-white text-2xl font-semibold uppercase hover:text-gray-300">DASHBOARD</a>
        </div>
        <div class="font-bold text-white pt-6 pb-4 pl-6"> 
            <i class="fas fa-table mr-3"></i>
            Tables
        </div>
        <nav class="text-white text-sm font-semibold pl-4">
            <a href="#" @click="table = 'hotels'" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6">
                <i class="fa fa-circle mr-3" aria-hidden="true"></i>
                Hotels
            </a>
            <a href="#" @click="table = 'rooms'" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6">
                <i class="fa fa-circle mr-3" aria-hidden="true"></i>
                Rooms
            </a>
            <a href="#" @click="table = 'reservations'" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item">
                <i class="fa fa-circle mr-3" aria-hidden="true"></i>
                Reservations
            </a>
            <a href="#" @click="table = 'customers'" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item">
                <i class="fa fa-circle mr-3" aria-hidden="true"></i>
                Customers
            </a>
            <a href="#" @click="table = 'bills'" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item">
                <i class="fa fa-circle mr-3" aria-hidden="true"></i>
                Bills
            </a>
            <a href="#" @click="table = 'payments'" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item">
                <i class="fa fa-circle mr-3" aria-hidden="true"></i>
                Payments
            </a>
        </nav>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div class="relative w-1/2 flex justify-end">
              <div class="p-2 font-semibold">Welcome!!!</div>
            </div>
        </header>
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Tables</h1>
                <!-- Hotels Table -->
                <div x-show="table === 'hotels'" class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        Hotels
                    </p>
                    <div class="bg-white rounded-sm shadow-sm overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">NAME</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">LOCATION</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y text-gray-700">
                              @foreach ($hotels as $hotel)
                                <tr>
                                    <td class="text-left py-3 px-4">{{ $hotel->id }}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $hotel->name }}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{ $hotel->location}}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Rooms Table -->
                <div x-show="table === 'rooms'" class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        Rooms
                    </p>
                    <div class="bg-white rounded-sm shadow-sm overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">HOTEL NAME</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ROOM NO.</th>
                                    <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">ROOM TYPE</th>
                                    <th class="w-1/4 text-left py-3 px-4 uppercase font-semibold text-sm">PRICE</td>
                                </tr>
                            </thead>
                            <tbody class="divide-y text-gray-700">
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td class="text-left py-3 px-4">{{ $room->id }}</td>
                                        <td class="w-1/4 text-left py-3 px-4">{{ $room->hotel->name}}</td>
                                        <td class="text-left py-3 px-4">{{ $room->room_no}}</td>
                                        <td class="w-1/4 text-left py-3 px-4">{{ $room->room_type}}</td>
                                        <td class="w-1/4 text-left py-3 px-4">{{'Php. ' . $room->price}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Reservations Table -->
                <div x-show="table === 'reservations'" class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        Reservations
                    </p>
                    <div class="bg-white rounded-sm shadow-sm overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">HOTEL NAME</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ROOM NO.</th>
                                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">CUSTOMER</th>
                                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">CHECK IN</th>
                                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">CHECK OUT</td>
                                    <th class="w-1/6 text-left py-3 px-4 uppercase font-semibold text-sm">CREATED AT</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y text-gray-700">
                                @foreach($reservations as $reservation)
                                <tr>
                                    <td class="text-left py-3 px-4">{{ $reservation->id }}</td>
                                    <td class="w-1/6 text-left py-3 px-4">{{ $reservation->room->hotel->name }}</td>
                                    <td class="text-left py-3 px-4">{{ $reservation->room->room_no }}</td>
                                    <td class="w-1/6 text-left py-3 px-4">{{ $reservation->customer->lastname . ',' . ' ' . $reservation->customer->firstname }}</td>
                                    <td class="w-1/6 text-left py-3 px-4">{{ date("m/d/y - g:i A", strtotime($reservation->check_in)) }}</td>
                                    <td class="w-1/6 text-left py-3 px-4">{{ date("m/d/y - g:i A", strtotime($reservation->check_out)) }}</td>
                                    <td class="w-1/6 text-left py-3 px-4">{{ date("m/d/y - g:i A", strtotime($reservation->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Customers Table -->
                <div x-show="table === 'customers'" class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        Customers
                    </p>
                    <div class="bg-white rounded-sm shadow-sm overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">FIRST NAME</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">LAST NAME</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">PHONE</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">ADDRESS</td>
                                </tr>
                            </thead>
                            <tbody class="divide-y text-gray-700">
                                @foreach( $customers as $customer )
                                <tr>
                                    <td class="text-left py-3 px-4">{{ $customer->id }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ $customer->firstname }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ $customer->lastname}}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ $customer->phone_no }}</td>
                                    <td class="w-1/4 text-left py-3 px-4">{{ $customer->address }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Bills Table -->
                <div x-show="table === 'bills'" class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        Bills
                    </p>
                    <div class="bg-white rounded-sm shadow-sm overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">CUSTOMER</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">INVOICE NO.</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">ROOM CHARGES</td>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">OTHER CHARGES</td>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">CREATED AT</td>
                                </tr>
                            </thead>
                            <tbody class="divide-y text-gray-700">
                                @foreach($bills as $bill)
                                <tr>
                                    <td class="text-left py-3 px-4">{{ $bill->id }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ $bill->customer->lastname . ',' . ' ' . $bill->customer->firstname }}</td>
                                    <td class="text-left py-3 px-4">{{ $bill->invoice_no }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ 'Php. ' . $bill->room_charges }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ 'Php. ' . $bill->other_charges }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ date("m/d/y - g:i A", strtotime($bill->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Payments Table -->
                <div x-show="table === 'payments'" class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        Payments
                    </p>
                    <div class="bg-white rounded-sm shadow-sm overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">BILL ID</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">INVOICE NO</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">CUSTOMER</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">PAYMENT METHOD</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">AMOUNT PAID</th>
                                    <th class="w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">PAID AT</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach($payments as $payment)
                                <tr>
                                    <td class="text-left py-3 px-4">{{ $payment->id }}</td>
                                    <td class="text-left py-3 px-4">{{ $payment->bill->id }}</td>
                                    <td class="text-left py-3 px-4">{{ $payment->bill->invoice_no }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ $payment->customer->lastname . ',' . ' ' . $payment->customer->firstname }}</td>
                                    <td class="text-left py-3 px-4">{{ $payment->payment_method }}</td>
                                    <td class="text-left py-3 px-4">{{ 'Php. ' . $payment->bill->room_charges + $payment->bill->other_charges }}</td>
                                    <td class="w-1/5 text-left py-3 px-4">{{ date("m/d/y - g:i A", strtotime($payment->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div> 
    </div>
</body>
</html>