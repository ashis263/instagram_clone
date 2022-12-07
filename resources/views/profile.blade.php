<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    @vite(['resources/css/profile.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Instagram-Profile</title>
</head>

<body>
    <header>
        <div class="first">
            <a href="/home/{{$instagram_clone->id}}">
                <img class="logo" src="{{ Vite::asset('./resources/images/home/logo.png') }}" alt="logo"/>
            </a>
            <span class="logo-nav">
                <i class="fa-solid fa-angle-down"></i>
            </span>
        </div>
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="Search">
        </div>
        <div class="nav">
            <ul>
                <li class="menu-icon">

                    <i class="fa-solid fa-house"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-brands fa-facebook-messenger"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-regular fa-square-plus"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-regular fa-compass"></i>
                </li>
                <li class="menu-icon">

                    <i class="fa-regular fa-heart"></i>
                </li>
                <li>
                    <a href="/profile/{{$instagram_clone->id}}">
                        <img class="menu-icon dp" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                    </a>
                </li>
                <li>
                    <a class="logout" href="/logout/{{$instagram_clone->id}}">Logout</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <section class="profile-section">
            <img class="profile-dp" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
            <div class="details">
                <div class="firstline">
                    <h1>{{$instagram_clone->username}}</h1>
                    <button class="edit-profile">Edit profile</button>
                </div>
                <pre>0 posts        0 followers         0 following</pre>
                <p><b>{{$instagram_clone->fullname}}</b></p>
            </div>
        </section>
        <hr>
        <section class="posts-section">
            <div class="menu">
                <i class="fa-solid fa-table-cells">Posts</i>
                <i class="fa-solid fa-clapperboard">Reels</i>
                <i class="fa-solid fa-bookmark">Saved</i>
                <i class="fa-solid fa-address-card">Tagged</i>
            </div>
            <div class="line">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
            </div>
            <div class="line">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
            </div>
            <div class="line">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
            </div>
            <div class="line">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
            </div>
            <div class="line">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                <img class="post" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-nav">
            <p>About . Help . Press . API . Jobs . Privacy . Terms . Locations . Language</p>
        </div>
        <div class="footer"><p>&copy 2022 INSTAGRAM FROM META</p></div>
        </div>
    </footer>
</body>
</html>