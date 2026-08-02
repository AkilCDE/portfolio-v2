<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio page.
     */
    public function index()
    {
        return view('portfolio');
    }

    /**
     * Store a new message in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:2000',
        ]);

        Message::create([
            'content' => $request->content,
        ]);

        return back()->with('success', 'Message sent successfully!');
    }
}
