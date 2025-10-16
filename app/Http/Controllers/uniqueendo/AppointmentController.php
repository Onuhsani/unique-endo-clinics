<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
use App\Mail\uniqueendo\AppointmentBookedMail;
use Illuminate\Http\Request;
use App\Models\uniqueendo\Appointment;
use App\Models\uniqueendo\Clinic;
use Illuminate\Support\Facades\Mail;


class AppointmentController extends Controller
{
    // Display a form to create a new appointment
    // public function createAppointment()
    // {
    //     $clinics = Clinic::all(); // Fetch all clinics for the dropdown
    //     return view('appointments.create', compact('clinics'));
    // }

    // Store a new appointment in the database
    public function addAppointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required',
            'clinic' => 'required|string',
        ]);

        try {
            // $clinic = Clinic::where('name', $request->clinic)->first();
            $appointment = Appointment::create([
                'clinic_id' => 1,
                'name' => $request->name,
                'email' => $request->email,
                'appointment_date' => $request->date,
                'status' => 'pending',
                // 'notes' => 'For treatment'
            ]);



            // Send email notification to admin
            $adminEmail = 'talk2onuh@gmail.com'; // replace with your admin email
            Mail::to($adminEmail)->send(new AppointmentBookedMail($appointment));

            return redirect()->back()->with('success', 'Appointment scheduled successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    // Display a list of all appointments
    public function appointments()
    {
        $appointments = Appointment::with('clinic')->orderBy('created_at', 'desc')->get();
        return view('admin.appointments', compact('appointments'));
    }


    // Delete an appointment
    public function deleteAppointment(Appointment $appointment)
    {
        try {
            $appointment->delete();

            return redirect()->back()->with('success', 'Appointment canceled successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function createReply(Appointment $appointment)
    {
        return view('admin.create-appointment-reply',compact('appointment'));
    }


    public function replyAppointment(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        try {
            Mail::raw($request->message, function ($mail) use ($request) {
                $mail->to($request->email)
                     ->subject($request->subject);
            });  dd($request);
            return back()->with('success', 'Email sent successfully!');
        }  catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
