<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
     * Store a new message in the database and email it.
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

            // Attempt to send email to akilcyrylle@gmail.com
            try {
                Mail::raw("New message received from your portfolio contact form:\n\nName: " . ($name ?? 'Anonymous') . "\nEmail: " . ($email ?? 'No email provided') . "\n\nMessage:\n" . $content, function ($mail) use ($name, $email) {
                    $mail->to('akilcyrylle@gmail.com')
                         ->subject('New Portfolio Message from ' . ($name ?? 'Visitor'));
                    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $mail->replyTo($email, $name);
                    }
                });
            } catch (\Throwable $e) {
                Log::warning('Portfolio mail sending failed: ' . $e->getMessage());
            }
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
        }

        return back()->with('success', 'Message sent successfully!');
    }
}
