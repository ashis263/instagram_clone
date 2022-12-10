<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Instagram-SignUp</title>
        @vite(['resources/css/signup.css'])
    </head>
    <body>
        <div class="signup-box">
            <img class="logo" src="{{Vite::asset('./resources/images/logo.png')}}" alt="">
            <div class="alternative">
                <p>Sign up to see photos and videos from your friends.</p>
                <br>
                <a href=""><button onclick="invalidClick()"><i class="fa-brands fa-square-facebook"></i> Log in With Facebook</button></a>
                <br>
                <p><b>OR</b></p>
            </div>
            <form class="signup" action="/saveUser" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="text" name="emailOrPhone" placeholder="Phone number or email" required>
                <input type="text" name="fullname" placeholder="Fullname" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <label for="dp"><p>Select a profile picture</p></label>
                <input type="file" id="dp" name="dp" accept="image/*" required>
                <div class="error">{{$errorMessage}}</div>
                <div class="success">{{$successMessage}}</div>
                <input type="submit" value="Sign up">
            </form>
            <div class="login">
                <p>Have an account? <a href="/">Log in</a></p>
            </div>
            <div class="store">
                <div>
                    <img src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="Get it on google play">
                    <img src="https://static.cdninstagram.com/rsrc.php/v3/yu/r/EHY6QnZYdNX.png" alt="Get it from microsoft">
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
