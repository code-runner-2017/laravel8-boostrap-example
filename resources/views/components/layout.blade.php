<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{ $slot }}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
