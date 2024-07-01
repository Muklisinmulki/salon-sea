<?php

// app/Http/Controllers/BookingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        // Validasi data dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'datetime' => 'required|date',
        ]);
    
        // Simpan data ke dalam database
        Appointment::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'service' => $request->service,
            'datetime' => $request->datetime,
        ]);
    
        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Booking berhasil disimpan!');
    }
    
}


