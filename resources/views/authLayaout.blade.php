<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/auth/_aouth_style.css')}}">

    <title>register</title>
</head>

<body>
    <section class="title">
        @if(session('alert'))
        <span class="text succssfully">
            {{session('alert')}}
        </span>
        @endif
    </section>

    @yield('content')

</body>

</html>