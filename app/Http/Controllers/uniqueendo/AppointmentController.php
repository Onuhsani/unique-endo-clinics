<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
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
            'appointment_date' => 'required',
            'clinic' => 'required|string',
        ]);

        try {
            // $clinic = Clinic::where('name', $request->clinic)->first();
            Appointment::create([
                'clinic_id' => 1,
                'name' => $request->name,
                'email' => $request->email,
                'appointment_date' => $request->appointment_date,
                'status' => 'pending',
                'notes' => 'For treatment'
            ]);

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

    // Display the form to edit an appointment
    // public function editAppointment(Appointment $appointment)
    // {
    //     $clinics = Clinic::all(); // Fetch all clinics for the dropdown
    //     return view('appointments.edit', compact('appointment', 'clinics'));
    // }

    // Update an appointment in the database
    // public function updateAppointment(Request $request, Appointment $appointment)
    // {
    //     $validatedData = $request->validate([
    //         'clinic_id' => 'required|exists:clinics,id',
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'appointment_date' => 'required|date|after_or_equal:today',
    //         'status' => 'required|in:pending,confirmed,cancelled,completed',
    //     ]);

    //     try {
    //         $appointment->update($validatedData);

    //         return redirect()->back()->with('success', 'Appointment updated successfully!');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
    //     }
    // }

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
