<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\uniqueendo\Clinic;
use App\Models\uniqueendo\Doctor;

class DoctorsController extends Controller
{


    public function doctors()
    {
        $doctors = Doctor::get();
        return view('admin.doctors',compact('doctors'));
    }


    public function createDoctor()
    {
        return view('admin.create-doctor');
    }


    public function addDoctor(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email',
            'password' => 'required|string|min:8|confirmed', // Requires a password confirmation field
        ]);

        try {
            // Create a new doctor record
            Doctor::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']), // Hash the password
            ]);

            return redirect()->back()->with('success', 'Doctor added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function editDoctor(Doctor $doctor)
    {
        return view('uniqueendo.edit-dcotor', compact('doctor'));
    }


    public function updateDoctor(Doctor $doctor, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email,' . $doctor->id,
            'password' => 'nullable|string|min:8|confirmed', // Optional password update
        ]);

        try {
            // Update the doctor record
            $doctor->update([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => $validatedData['password']
                    ? Hash::make($validatedData['password'])
                    : $doctor->password, // Keep the old password if none is provided
            ]);

            return redirect()->back()->with('success', 'Doctor updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function deleteDoctor(Doctor $doctor)
    {
        try {
            $doctor->delete();
            return redirect()->back()->with('success', 'Doctor deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }





    public function clinics()
    {
        return view('uniqueendo.view-clinics');
    }


    public function createClinic()
    {
        return view('uniqueendo.create-clinic');
    }


    public function addClinic()
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        try {
            Clinic::create($validatedData);
            return redirect()->back()->with('success', 'Clinic added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the clinic.');
        }
    }



    public function deleteClinic(Clinic $clinic)
    {
        try {
            Clinic->delete();
            return redirect()->back()->with('success', 'Clinic deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the clinic.');
        }
    }


    public function editClinic(Clinic $clinic)
    {
        return view('uniqueendo.edit-clinic', compact('clinic'));
    }


    public function updateClinic(Clinic $clinic)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        try {
            $clinic->update($validatedData);
            return redirect()->back()->with('success', 'Clinic updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the clinic.');
        }
    }









}
