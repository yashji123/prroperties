<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}!</h1>
    <p>Thank you for registering with us. Please click the link below to verify your email address:</p>
    <a href="{{ $verifyUrl }}">Verify Email</a>
</body>
</html>
