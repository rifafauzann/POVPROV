<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PORPROV</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>

<body>

@include('partials.navbar')

<div class="page-content">
    @yield('content')
</div>

@include('partials.footer')

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>