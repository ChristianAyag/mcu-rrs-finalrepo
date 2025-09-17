<!DOCTYPE html>
<html>
<head>
    <title>MCU-RRS ACCOUNT CREDENTIALS</title>
</head>
<body>
    <h2>Welcome, {{ $fname }}!</h2>

    <p>Your account has approved and classified. Here is your username:</p>
    <ul>
        <li>Username: {{ $id }}</li>
        <li>Password: based on your registered password</li>
    </ul>

    @isset($classification)
        <p>Your review classification is: <strong>{{ $classification }}</strong></p>
    @endisset

    <p>Please wait for 2 days while your account is fully processed based on your research title.</p>
</body>
</html>