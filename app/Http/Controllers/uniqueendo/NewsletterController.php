<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\uniqueendo\Newsletter;
use App\Models\uniqueendo\SentNewsletter;


class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create(['email' => $request->email]);

        return back()->with('success', 'You have successfully subscribed to our newsletter!');
    }


    public function viewNewsletters()
    {

        $newsletters = SentNewsletter::orderBy('created_at', 'DESC')->get();

        return view('admin.newsletters',compact('newsletters'));
    }


    public function showNewsletter(SentNewsletter $newsletter)
    {
        return view('admin.show-newsletter',compact('newsletter'));
    }


    public function createNewsletter()
    {
        return view('admin.create-newsletter');
    }



    /**
     * Send newsletters to all subscribers.
     */
    public function sendNewsletter(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $subscribers = Newsletter::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->queue(new NewsletterMail($request->subject, $request->content));
        }

        return back()->with('success', 'Newsletter sent successfully!');
    }


    public function viewSubscribers()
    {
        $subscribers = Newsletter::orderBy('created_at','DESC')->get();
        $num = 0;
        return view('admin.newsletter-subscribers', compact('subscribers','num'));
    }


    public function deleteNewsletter(SentNewsletter $sentNewsletter)
    {
        try {
            $sentNewsletter->delete();
            return redirect()->back()->with('success', 'Newsletter deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function deleteSubscriber(Newsletter $newsletter)
    {
        try {
            $newsletter->delete();
            return redirect()->back()->with('success', 'Newsletter deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
