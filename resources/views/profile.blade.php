@include('layouts.header')
@vite(['resources/css/profile.css'])
    <main>
        <section class="profile-section">
            <img class="profile-dp" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
            <div class="details">
                <div class="firstline">
                    <h1>{{$instagram_clone->username}}</h1>
                    <button class="edit-profile invalid-btn" onclick="invalidClick()">Edit profile</button>
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
@include('layouts.footer')
