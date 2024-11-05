<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo/logo-kotak-white.png">
    <title>Admin Dashboard</title>
</head>

<body>
    <h1>Welcome, {{ Auth::user()->name }} (Admin)</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
