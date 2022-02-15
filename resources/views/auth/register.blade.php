<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <html>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset 'plugins/fontawesome-free/css/all.min.css' }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset 'plugins/icheck-bootstrap/icheck-bootstrap.min.css' }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset 'dist/css/adminlte.min.css' }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        </head>
        <body class="hold-transition register-page">
        <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Admin</b>LTE</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div class="input-group mb-3">
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

             <!-- Last Name -->
            <div class="input-group mb-3">
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>  
            </div>

            <!-- Role -->
            <div class="input-group mb-3">
                <label for="role" class="">{{ __('SelectRole') }}</label> </br>

                <select name="role" id="" class="form-control">
                    <option value="Accountant">Accountant</option>
                    <option value="Manager">Manager</option>
                </select>
            </div>    

            <!-- Email Address -->
            <div class="input-group mb-3">
                <x-input id="email" class="form-control" type="email" 
                                    name="email" :value="old('email')" placeholder="Email" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                             <span class="fas fa-envelope"></span>
                        </div>
                    </div>
            </div>

             <!-- Phone Number -->
            <div class="input-group mb-3">
                    <x-input id="phone" class="form-control" type="text" name="phone" 
                        :value="old('email')" placeholder="Phone Number" required />
                    <div class="input-group-append">
                        <div class="input-group-text">
                             <span class="fas fa-phone"></span>
                        </div>
                    </div>
            </div>

            <!-- Password -->
            <div class="input-group mb-3">
                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password"
                                placeholder="Password" />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="input-group mb-3">
                    <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required 
                                placeholder="Retype password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>


            <div class="col-4">
                <x-button class="ml-4 btn btn-primary btn-block">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
