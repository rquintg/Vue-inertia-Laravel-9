<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/2d30bda616.js" crossorigin="anonymous"></script>
    @routes
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
