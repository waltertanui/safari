<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('bookings.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tour' => 'required|string|max:255',
            'people' => 'required|integer|min:1',
            'start_date' => 'required|date|after:today',
            'phone' => 'required|string|max:20',
            'requirements' => 'nullable|string',
        ]);

        Booking::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Your booking has been submitted successfully! We will contact you shortly.'
        ]);
    }
}