<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | POS System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
        nav { background: #2c3e50; padding: 12px 20px; }
        nav a { color: #fff; text-decoration: none; margin-right: 20px; }
        nav a:hover { text-decoration: underline; }
        main { max-width: 900px; margin: 30px auto; background: #fff; padding: 20px 30px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #2c3e50; color: #fff; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customer Accounts</a>
        <a href="{{ route('users') }}">User Accounts</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>