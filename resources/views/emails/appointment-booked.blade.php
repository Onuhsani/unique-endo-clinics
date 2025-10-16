<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Appointment Notification</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <h2>New Appointment Booked!</h2>

    <p>A new appointment has just been booked on your website.</p>

    <p><strong>Name:</strong> {{ $appointment->name }}</p>
    <p><strong>Email:</strong> {{ $appointment->email }}</p>
    <p><strong>Phone:</strong> {{ $appointment->phone }}</p>
    <p><strong>Date:</strong> {{ $appointment->date }}</p>
    <p><strong>Message:</strong> {{ $appointment->message ?? 'No additional message' }}</p>

    <p>Login to your admin dashboard to view more details.</p>

    <br>
    <p>— Unique Endo Clinics</p>
</body>
</html>
