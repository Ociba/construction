{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}

<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">



<head>
    <title>Coge | Construction Company Ltd</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <link rel="icon" type="image/x-icon" href="{{ asset('img/llogo.jpg')}}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pages/authentication.css')}}">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('admin/assets/img/bg/soroti5.jpg');">
        <div class="ui-bg-overlay bg-info opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
                <div class="p-4 p-sm-5">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="{{ asset('img/llogo.jpg')}}" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->

                    <h5 class="text-center text-muted font-weight-normal mb-4">Login to Your Account</h5>

                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                        <label class="form-label">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                            <div class="clearfix"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center m-0">
                            <label class="custom-control custom-checkbox m-0">
                                <input type="checkbox" id="remember_me" name="remember" class="custom-control-input">
                                <span class="custom-control-label">Remember me</span>
                            </label>
                            <label class="form-label d-flex justify-content-between align-items-end">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="d-block small"><span style="color:blue;">Forgot password?</span></a>
                                @endif
                            </label> 
                        </div>
                        <div class="col-xl-12 text-center mt-4">
                        <button type="submit" class="btn btn-round btn-primary">Sign In</button>
                    </div>
                    </form>
                    <!-- [ Form ] End -->

                </div>
                <div class="card-footer py-3 px-1 px-sm-5">
                    <div class="text-center text-muted">
                       <span style="color:#716aca">Work Efficiency is our Result</span>
                        {{--<a href="{{ route('login') }}">Sign Up</a>--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->

    <!-- Core scripts -->
    <script src="{{ asset('admin/assets/js/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>
    <script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Demo -->
</script><script src="{{ asset('admin/assets/js/analytics.js')}}"></script>

</body>
</html>
