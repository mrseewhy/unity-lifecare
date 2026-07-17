<!DOCTYPE html>
<html>
<head>
    <title>New Submission Received</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; margin: 0;">

    <!-- Header -->
    <div style="max-width: 600px; margin: 0 auto; background-color: #6A0DAD; color: white; text-align: center; padding: 15px; font-size: 22px; font-weight: bold; border-radius: 5px 5px 0 0;">
        Unity Lifecare - Admin Notification
    </div>

    <!-- Email Content -->
    <div style="max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 0 0 8px 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
        <h3 style="font-size: 20px; font-weight: bold; color: #333;">
            Hello Admin,
        </h3>
        <p style="font-size: 16px; color: #555;">A new submission has been received on Unity Lifecare.</p>

        <p style="font-size: 16px; color: #555;"><strong>Details:</strong></p>
        <ul style="font-size: 16px; color: #555;">
            <li><strong>Name:</strong> {{ $data['name'] ?? 'N/A' }}</li>
            <li><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</li>

        </ul>

        <p style="font-size: 16px; color: #555;">Please log in to the admin panel to review the full submission > {{ $data['appUrl'].'/dashboard' }}</p>

        <p style="font-size: 16px; color: #555;">Best regards,</p>
        <p style="font-size: 16px; font-weight: bold; color: #333;">Unity Lifecare System</p>
    </div>

    <!-- Footer -->
    <div style="max-width: 600px; margin: 20px auto 0; background-color: #6A0DAD; color: white; text-align: center; padding: 15px; font-size: 14px; border-radius: 5px;">
        <p style="margin: 0;">
            Website: <a href="https://www.unitylifecare.com" style="color: white; text-decoration: none;">www.unitylifecare.com</a> |
            Phone: <a href="tel:+6147616440" style="color: white; text-decoration: none;">+61 476 164 40</a>, <a href="tel:+61470181583" style="color: white; text-decoration: none;">+61 470 181 583</a> |
            Address: Perth: 50/11 Tanunda drive Rivervale WA 6103, Canberra: 54A Ragless Circuit Kambah ACT2902
        </p>
    </div>

</body>
</html>
