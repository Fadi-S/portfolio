<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script data-ad-client="ca-pub-9069140631047993" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <title>{{ $title }}</title>

    @livewireScripts
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>

{{ $slot }}

<script src="{{ url('js/app.js') }}"></script>

@stack('scripts')

@stack('modals')

@livewireStyles
</body>
</html>