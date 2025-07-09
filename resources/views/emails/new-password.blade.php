
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your New Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .title {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }
        .password-box {
            font-size: 18px;
            background-color: #f0f0f0;
            padding: 12px;
            border-radius: 6px;
            margin: 15px 0;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Hello {{ $user->name ?? 'User' }},</div>

        <p>Your new password has been generated successfully.</p>

        <div class="password-box">
            {{ $password }}
        </div>

        <p>You can now log in using this password. We recommend changing it after login.</p>

        <div class="footer">
            If you didn't request this password, please ignore this email.<br><br>
            – {{ config('app.name') }}
        </div>
    </div>
</body>
</html>
