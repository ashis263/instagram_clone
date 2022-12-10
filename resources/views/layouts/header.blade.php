<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    @vite(['resources/css/layouts/header.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <input type="search" placeholder="Search" onkeypress="invalidClick()">
        </div>
        <div class="nav">
            <ul>
                <li class="menu-icon">
                    <a href="/home/{{$instagram_clone->id}}"><i title="Home" class="fa-solid fa-house"></i></a>
                </li>
                <li class="menu-icon">
                    <a href="">
                        <button class="invalid-btn" onclick="invalidClick()">
                            <i title="Messages" class="fa-brands fa-facebook-messenger"></i>
                        </button>
                    </a>
                </li>
                <li class="menu-icon">
                        <form id="upload-form" class="upload-form" action="/upload/{{$instagram_clone->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input id="file" type="file" name="photo" accept="image/*" onchange="upload()">
                        </form>
                        <i class="fa-regular fa-square-plus" onclick="selectPhoto()"></i>
                    </li>
                    <li class="menu-icon">
                        <a href="">
                        <button class="invalid-btn" onclick="invalidClick()">
                            <i title="Explore" class="fa-regular fa-compass"></i>
                        </button>
                        </a>
                    </li>
                    <li class="menu-icon">
                        <a href="">
                        <button class="invalid-btn" onclick="invalidClick()">
                        <i title="Likes" class="fa-regular fa-heart"></i>
                        </button>
                    </a>
                </li>
                <li>
                    <a href="/profile/{{$instagram_clone->id}}">
                        <img title="Profile" class="menu-icon dp" src="{{ Vite::asset('storage/app/public/images/dp/'.$instagram_clone->dp) }}" alt="Profile Picture">
                    </a>
                </li>
                <li>
                    <a class="logout" href="/logout/{{$instagram_clone->id}}">Logout</a>
                </li>

            </ul>
        </div>
    </header>
