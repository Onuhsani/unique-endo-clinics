<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Appointment Notification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">New Appointment Booked!</h4>
            </div>

            <div class="card-body">
                <p class="mb-3">A new appointment has just been booked on your website. Below are the details:</p>

                <ul class="list-group mb-3">
                    <li class="list-group-item"><strong>Name:</strong> {{ $appointment->name }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $appointment->email }}</li>
                    <li class="list-group-item"><strong>Phone:</strong> {{ $appointment->phone }}</li>
                    <li class="list-group-item"><strong>Appointment Date:</strong> {{ $appointment->appointment_date }}</li>
                    <li class="list-group-item"><strong>Service:</strong> {{ $appointment->clinic_id ?? 'No additional message' }}</li>
                </ul>

                <p>Login to your admin dashboard to view more details and manage appointments.</p>

                <div class="text-center">
                    <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
                </div>
            </div>

            <div class="card-footer text-center text-muted small">
                — Unique Endo Clinics<br>
                <em>This message was automatically generated. Please do not reply directly.</em>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
