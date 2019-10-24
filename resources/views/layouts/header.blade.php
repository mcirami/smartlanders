<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Play Time</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <script src="{{ asset('js/app.min.js') }}" defer></script>

    <!--<script src="js/main.js"></script>-->

</head>
<body>
<div class="row page_wrapper">
    <div class="col-12">
        <div class="row">
            <div class="col-10 col-md-8 col-lg-6 col-xl-4 mx-auto">
                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
