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
        $content = $request->input('message') ?? $request->input('content');
        $name = $request->input('name');
        $email = $request->input('email');

        $fullContent = $content;
        if ($name || $email) {
            $fullContent = "From: " . ($name ?? 'Anonymous') . " <" . ($email ?? 'no-email') . ">\n\n" . $content;
        }

        if (!empty($fullContent)) {
            Message::create([
                'content' => $fullContent,
            ]);
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
        }

        return back()->with('success', 'Message sent successfully!');
    }
}
