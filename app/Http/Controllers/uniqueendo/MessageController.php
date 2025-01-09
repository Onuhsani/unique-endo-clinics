<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\uniqueendo\Message;

class MessageController extends Controller
{
    // Store user message
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Message::create($request->only(['name', 'email', 'message']));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // View all messages (Admin only)
    public function viewMessages()
    {
        $messages = Message::latest()->get();
        return view('admin.messages', compact('messages'));
    }

    // Reply to a message (Admin only)
    public function replyMessage(Request $request, Message $message)
    {
        $request->validate([
            'reply' => 'required|string',
        ]);

        // Send reply via email
        Mail::raw($request->reply, function ($mail) use ($message) {
            $mail->to($message->email)
                 ->subject('Reply to your message');
        });

        return redirect()->route('messages.view')->with('success', 'Reply sent successfully!');
    }


    //Show message
    public function showMessage(Message $message)
    {
        return view('admin.show-message',compact('message'));
    }


    //createMessageReply
    public function createMessageReply(Message $message)
    {
        return view('admin.create-message-reply',compact('message'));
    }


    // Delete a message (Admin only)
    public function deleteMessage(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.view')->with('success', 'Message deleted successfully!');
    }
}
