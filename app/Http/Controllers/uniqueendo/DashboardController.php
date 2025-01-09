<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\uniqueendo\Appointment;
use App\Models\uniqueendo\Newsletter;
use App\Models\uniqueendo\Doctor;


class DashboardController extends Controller
{
    public function index()
    {
        $appointments = count(Appointment::all());
        $newsletters = count(Newsletter::all());
        $doctors = count(Doctor::all());
        return view('admin.dashboard', compact(['appointments', 'newsletters', 'doctors']));
    }
}
