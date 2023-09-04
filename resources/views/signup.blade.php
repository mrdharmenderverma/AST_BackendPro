<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Avtar Space Technology</title>
</head>

<body>
    <h2>Welcome to Avtar Space Technology!!</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="signup" method="POST">
                @csrf
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                {{-- <input type="text" name="name" placeholder="Name" required /> --}}
                <x-input id="name" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />

                {{-- <x-label for="email" value="{{ __('Email') }}" /> --}}
                <x-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />

                {{-- <input type="email" name="email" placeholder="Email" required /> --}}
                {{-- <input type="password" name="password" placeholder="Password" required /> --}}
                <x-input id="password" class="block mt-1 w-full" placeholder="Password"  type="password" name="password" required autocomplete="new-password" />
                <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" />
                {{-- <button type="submit">Sign Up</button> --}}
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login" method="POST">
                @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" />                
                <input type="password" name="name" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="">Ruchi</a>.
            <!-- <a target="_blank" href="">here</a>. -->
        </p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
    <!--fontawasome-->
    <script src="https://kit.fontawesome.com/2b4edc6497.js" crossorigin="anonymous"></script>
</body>

</html>
