<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="{{asset('home/css/loginFormStyle.css')}}">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Login form responsive</title>  
    </head>
    @include('home.header')
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="images/Designer.png" alt="" class="form__img">

                <form action="{{ route('login') }}" method="POST" class="form__content">
                    @csrf
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                        <i class='bx bx-envelope'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="email" class="form__label">Email</label>
                            <input type="email" name="email" class="form__input" :value="old('email')" required autocomplete="email">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="password" class="form__label">Password</label>
                            <input type="password" class="form__input" name="password" required autocomplete="current-password">
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="form__forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <input type="submit" class="form__button mb-4" value="Login">
                    <p class="no-account">
                            Don't have an account?
                            <a href="{{ route('register') }}">Sign up</a>
                    </p>
                    
                    <!-- <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div> -->
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="home/js/loginFormApp.js"></script>
    </body>
</html>