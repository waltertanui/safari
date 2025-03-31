<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_tours' => 15,
            'active_tours' => 8,
            'destinations' => 12,
            'upcoming_safaris' => 5
        ];
        return view('dashboard.index', compact('stats'));
    }

    public function tours()
    {
        return view('tours.index');
    }

    public function destinations()
    {
        return view('destinations.index');
    }

    public function bookings()
    {
        return view('bookings.index');
    }
}