<!DOCTYPE html>
<html>
<head>
    <title>Complete Your Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="font-family: Arial, sans-serif; padding: 20px; background-color: #f4f4f4; margin: 0;">

    <!-- Header -->
    <div style="max-width: 600px; margin: 0 auto; background-color: #6A0DAD; color: white; text-align: center; padding: 15px; font-size: 22px; font-weight: bold; border-radius: 5px 5px 0 0;">
        Unity Lifecare
    </div>

    <!-- Email Content -->
    <div style="max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 0 0 8px 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
        <h3 style="font-size: 20px; font-weight: bold; color: #333;">
            Hello{{ isset($data['name']) ? ', ' . $data['name'] : '' }},
        </h3>
        <p style="font-size: 16px; color: #555;">Thank you for trusting us—we're excited to have you on board!</p>

        <p style="font-size: 16px; color: #555;">To complete your registration, please follow these steps:</p>

        <ol style="font-size: 16px; color: #555; padding-left: 15px;">
            <li>Click the button below to complete your registration:</li>
        </ol>

        <!-- Call-to-Action Button -->
        <div style="text-align: center; margin: 20px 0;">
            <a href="{{ $data['url'] }}" style="display: inline-block; padding: 12px 25px; background-color: #6A0DAD; color: white; text-decoration: none; border-radius: 5px; font-size: 16px; font-weight: bold;">
                Complete Registration
            </a>
        </div>

        <p style="font-size: 14px; color: #555; text-align: center;">
            If the button doesn’t work, copy and paste the following link into your browser:
        </p>

        <!-- Fallback Link -->
        <p style="word-break: break-word; font-size: 14px; color: #6A0DAD; text-align: center; background: #f8f8f8; padding: 10px; border-radius: 5px;">
            {{ $data['url'] }}
        </p>

        <p style="font-size: 16px; color: #555;"><strong>2.</strong> Follow the on-screen instructions to fill out your information.</p>
        <p style="font-size: 16px; color: #555;"><strong>3.</strong> Once completed, we’ll send you a confirmation email.</p>

        <p style="font-size: 16px; color: #555;">If you don’t receive the email within a few minutes, please check your spam folder or contact our support team at <a href="mailto:support@example.com" style="color: #6A0DAD; text-decoration: none;">support@unitylifecare.com.au</a>.</p>

        <p style="font-size: 16px; color: #555;">Thank you once again for choosing Unity Lifecare!</p>

        <p style="font-size: 16px; color: #555;">Best regards,</p>
        <p style="font-size: 16px; font-weight: bold; color: #333;">Unity Lifecare Team</p>
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
