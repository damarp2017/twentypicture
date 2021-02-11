<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('dashboard', [
            'messages' => $messages
        ]);
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->back()->withSuccess("Message from: $message->name deleted successfully.");
    }
}
