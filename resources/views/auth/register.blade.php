<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="{{asset('home/css/loginFormStyle.css')}}">
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <title>Register</title>  
    </head>
    <body>
    @include('home.header')
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="images/Product launch.png" alt="" class="form__img">

                <form method="POST" action="{{ route('register') }}" class="form__content" id="Form1">
                @csrf
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="name" class="form__label">Name</label>
                            <input type="text" id="name" class="form__input" 
                             name="name" :value="old('name')" required autocomplete="name">
                        </div>

                    </div>
                    <!--  -->
                    <div class="form__div form__div-one">
                        <div class="form__icon">
                        <i class='bx bx-envelope'></i>
                        </div>

                        <div class="form__div-input">
                        <label for="email" class="form__label">Email</label>
                            <input type="email" id="email" class="form__input" 
                             name="email" :value="old('email')" required autocomplete="email">
                        </div>
                    </div>
                    <!--  -->
                    <div class="form__div form__div-one">
                        <div class="form__icon">
                        <i class='bx bx-mobile' ></i>
                        </div>

                        <div class="form__div-input">
                        <label for="password" class="form__label">Phone</label>
                            <input type="tel" id="phone" class="form__input" 
                             name="phone" :value="old('phone')" required>
                        </div>
                    </div>
                    <!--  -->
                    <div class="form__div form__div-one">
                        <div class="form__icon">
                        <i class='bx bx-location-plus' ></i>
                        </div>

                        <div class="form__div-input">
                        <label for="address" class="form__label">Address</label>
                            <input type="text" id="address" class="form__input" 
                             name="address" :value="old('address')" required>
                        </div>
                    </div>
                    <!--  -->
                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                        <label for="password" class="form__label">Password</label>
                            <input type="password" id="password" class="form__input" 
                             name="password" :value="old('password')" required autocomplete="new-password">
                        </div>
                    </div>
                    <!--  -->
                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                        <label for="password_confirmation" class="form__label">Confirm Password</label>
                            <input type="password" id="password_confirmation" class="form__input" 
                             name="password_confirmation" :value="old('password')" required autocomplete="new-password">
                        </div>
                    </div>
                    <!--  -->
                    <input type="submit" class="form__button mb-4" value="Register">
                    <p class="no-account">
                            Already have an account?
                            <a href="{{ route('login') }}">Sign in</a>
                    </p>
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="home/js/loginFormApp.js"></script>
    </body>
</html>