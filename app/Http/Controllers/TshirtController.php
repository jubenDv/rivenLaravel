<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;

class TshirtController extends Controller
{
    // Show the form to input T-shirt data
    public function create()
    {
        return view('tshirts.create');
    }

    // Store the T-shirt data
    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required|string|max:10',
            'color' => 'required|string|max:20',
            'quantity' => 'required|integer|min:1',
        ]);

        Tshirt::create([
            'size' => $request->size,
            'color' => $request->color,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('tshirts.create')->with('success', 'T-shirt data added successfully!');
    }
}
