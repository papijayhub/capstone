
<x-slot name="logo">
</x-slot>
<x-jet-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
    <body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Login Form</h2>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="inputBox">
                            <x-jet-label for="email"/>
                            <x-jet-input id="email" class="inpute" type="email" name="email" :value="old('email')" required autofocus  placeholder="Email"/>
                        </div>
                        <div class="inputBox">
                            <x-jet-label for="password"/>
                            <x-jet-input id="password" class="inpute" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                        </div>
                        <div class="inputBox">
                            <div class="inputBox">
                            <input type="submit" class="inpute" value="Login">
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                        <p class="forget">
                            Forget Password?
                            <a href="{{ route('password.request') }}">Click Here</a>
                        </p>
                        <p class="forget">
                            Don't have an account?
                            <a href="">Sign up</a>
                        </p>
                @endif
            </div>


                        <!-- <p class="forget">
                            Forget Password?
                            <a href="">Click Here</a>
                        </p>
                        <p class="forget">
                            Don't have an account?
                            <a href="">Sign up</a>
                        </p> -->
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    overflow: hidden;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(to bottom, #f1f4f9,#dff1ff);
}
section .color{
    position: absolute;
    filter: blur(150px);
}
section .color:nth-child(1){
    top: -350px;
    width: 1200px;
    height: 700px;
    background: #ff359b;
}
section .color:nth-child(2){
    bottom: -150px;
    left: 100px;
    width: 1000px;
    height: 600px;
    background: #fffd87;
}
section .color:nth-child(3){
    bottom: 50px;
    right: 100px;
    width: 700px;
    height: 400px;
    background: #00d2ff;
}
.box{
    position: relative;
}
.box .square{
    position: absolute;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    animation: animate 10s linear infinite;
    animation-delay: calc(-1s * var(--i));
}
@keyframes animate{
    0%, 100%{
        transform: translateY(-40px)
    }
    50%{
        transform: translateY(40px)
    }
}
.box .square:nth-child(1){
    top: -50px;
    right: -60px;
    width: 100px;
    height: 100px;
}
.box .square:nth-child(2){
    top: 150px;
    left: -100px;
    width: 120px;
    height: 120px;
    z-index: 2;
}
.box .square:nth-child(3){
    bottom: 50px;   
    right: -60px;
    width: 80px;
    height: 80px;
    z-index: 2;
}
.box .square:nth-child(4){
    bottom: -80px;   
    left: 100px;
    width: 50px;
    height: 50px;
}
.box .square:nth-child(5){
    top: -80px;
    left: 140px;
    width: 60px;
    height: 60px;
}
.container{
    position: relative;
    width: 400px;
    min-height: 400px;
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(5px);
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.form{
    position: relative;
    width: 100%;
    height: 100%;
    padding: 40px;
}
.form h2{
    position: relative;
    /* color: #fff; */
    color: black;
    font-size: 24px;
    font-weight: 600;
    Letter-spacing: 1px;
    margin-bottom: 40px;
}
.form h2::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 80px;
    height: 4px;
    background: #fff;
}
.form .inputBox{
    width: 100%;
    margin-top: 20px;
}
.form .inputBox .inpute{
    width: 100%;
    background: rgba(255,255,255,0.2);
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.2);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 16px;
    Letter-spacing: 1px;
    /* color: #fff; */
    color: black;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}
.form .inputBox .inpute::placeholder{
    /* color: #fff; */
    color: black;
}
.form .inputBox .inpute[type="submit"]{
    background: #fff;
    color: #666;
    max-width: 100px;
    cursor: pointer;
    margin-bottom: 20px;
    font-weight: 600;
}
.forget{
    margin-top: 5px;
    /* color: #fff; */
    color: black;
}
.forget a{
    /* color: #fff; */
    color: navy blue;
    font-weight: 600
}
</style>