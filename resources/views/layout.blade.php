<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title','HomePage')</title>
</head>
<body>

    <ul>
        <li><a href="/">Home Page</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/about">About Us</a></li>
    </ul>

    @yield('content')
</body>
</html>
