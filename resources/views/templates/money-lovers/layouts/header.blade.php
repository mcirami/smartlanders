<!DOCTYPE html>
<html lang="en">
<head>
    <title>Money Lovers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <script src="{{ asset('js/app.min.js') }}" defer></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <div class="row money_lovers">
        <div class="col-12">

            <header class="row w-100 no-gutters" id="global_header">
                <div class="col-12">

                    @if( Route::currentRouteName() == 'ml-success' || Route::currentRouteName() == 'terms')
                        @include('templates.money-lovers.layouts.nav-alt')
                    @else
                        @include('templates.money-lovers.layouts.nav')
                    @endif
                </div><!-- col-12 -->
            </header>

            @yield('content')

            @include('templates.money-lovers.layouts.footer')

        </div>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-12 text-center">
                            @if (isset($_GET['loginError']))
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled m-0">
                                        <li class="text-danger">{{ $_GET['loginError'] }}</li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <form method="post" action="/ml-login">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" Required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" Required>
                            </div>
                            <button type="submit" class="rounded-pill px-4 py-0">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
