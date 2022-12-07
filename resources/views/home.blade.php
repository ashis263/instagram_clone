@include('layouts.header')
@vite(['resources/css/home.css'])
    <main>
    <div class="scrollable">
        <div class="stories">
            <div>
                <img class="story" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}">
                <p>My Story</p>
            </div>
            <div>
                <img class="story" src="{{ Vite::asset('./resources/images/home/follow5.jpg') }}">
                <p>_taslim.z</p>
            </div>
            <div>
                <img class="story" src="{{ Vite::asset('./resources/images/home/follow4.png') }}">
                <p>asif_121_m</p>
            </div>
            <div>
                <img class="story" src="{{ Vite::asset('./resources/images/home/follow2.png') }}">
                <p>shinsuchi</p>
            </div>
            <div class="story-none">
                <img class="story" src="{{ Vite::asset('./resources/images/home/follow1.png') }}">
                <p>nomadev01</p>
            </div>
            <div class="story-none">
                <img class="story" src="{{ Vite::asset('./resources/images/home/follow3.png') }}">
                <p>bionel10</p>
            </div>
        </div>

        <div class="posts">
            <div class="user">
                <div class="post">
                    <img class="post-dp" src="{{Vite::asset('./resources/images/home/follow1.png')}}"/>
                    <p>nomadev01</p>

                    <p><b>...</b></p>
                </div>
            </div>
            <div>
                <img class="post-pic" src="{{Vite::asset('./resources/images/home/follow1.png')}}"/>
            </div>
            <div class="interaction">
                <div>
                    <ul class="react">
                        <li><i class="fa-regular fa-heart"></i></li>
                        <li><i class="fa-regular fa-comment"></i></li>
                        <li><i class="fa-regular fa-paper-plane"></i></li>
                    </ul>
                </div>
                <div>
                    <ul class="save">
                        <li>
                            <i class="fa-regular fa-bookmark"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="info">
                <p>
                    <b>50 Likes</b>
                </p>
                <p>
                    <b>nomadev01</b> Patience — what you have when there are too many witnesses.
                </p>
                <p>
                    View all comments
                </p>
                <p>
                    1 DAY AGO
                </p>
            </div>
            <div class="last">
                <div class="emoji">
                    <i class="fa-regular fa-face-surprise"></i>
                    <input type="text" placeholder="Add a comment..."/>
                    <p>Post</p>
                </div>
            </div>
        </div>
        <div class="posts">
            <div class="user">
                <div class="post">
                    <img class="post-dp" src="{{Vite::asset('./resources/images/home/follow2.png')}}"/>
                    <p>shinsuchi</p>

                    <p><b>...</b></p>
                </div>
            </div>
            <div>
                <img class="post-pic" src="{{Vite::asset('./resources/images/home/follow2.png')}}"/>
            </div>
            <div class="interaction">
                <div>
                    <ul class="react">
                        <li><i class="fa-regular fa-heart"></i></li>
                        <li><i class="fa-regular fa-comment"></i></li>
                        <li><i class="fa-regular fa-paper-plane"></i></li>
                    </ul>
                </div>
                <div>
                    <ul class="save">
                        <li>
                            <i class="fa-regular fa-bookmark"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="info">
                <p>
                    <b>57 Likes</b>
                </p>
                <p>
                    <b>shinsuchi</b> Don’t give up on your dreams
                </p>
                <p>
                    View all comments
                </p>
                <p>
                    2 DAY AGO
                </p>
            </div>
            <div class="last">
                <div class="emoji">
                    <i class="fa-regular fa-face-surprise"></i>
                    <input type="text" placeholder="Add a comment..."/>
                    <p>Post</p>
                </div>
            </div>
        </div>
        <div class="posts">
            <div class="user">
                <div class="post">
                    <img class="post-dp" src="{{Vite::asset('./resources/images/home/follow1.png')}}"/>
                    <p>nomadev01</p>

                    <p><b>...</b></p>
                </div>
            </div>
            <div>
                <img class="post-pic" src="{{Vite::asset('./resources/images/home/follow1.png')}}"/>
            </div>
            <div class="interaction">
                <div>
                    <ul class="react">
                        <li><i class="fa-regular fa-heart"></i></li>
                        <li><i class="fa-regular fa-comment"></i></li>
                        <li><i class="fa-regular fa-paper-plane"></i></li>
                    </ul>
                </div>
                <div>
                    <ul class="save">
                        <li>
                            <i class="fa-regular fa-bookmark"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="info">
                <p>
                    <b>50 Likes</b>
                </p>
                <p>
                    <b>nomadev01</b> Patience — what you have when there are too many witnesses.
                </p>
                <p>
                    View all comments
                </p>
                <p>
                    1 DAY AGO
                </p>
            </div>
            <div class="last">
                <div class="emoji">
                    <i class="fa-regular fa-face-surprise"></i>
                    <input type="text" placeholder="Add a comment..."/>
                    <p>Post</p>
                </div>
            </div>
        </div>
        <div class="posts">
            <div class="user">
                <div class="post">
                    <img class="post-dp" src="{{Vite::asset('./resources/images/home/follow2.png')}}"/>
                    <p>shinsuchi</p>

                    <p><b>...</b></p>
                </div>
            </div>
            <div>
                <img class="post-pic" src="{{Vite::asset('./resources/images/home/follow2.png')}}"/>
            </div>
            <div class="interaction">
                <div>
                    <ul class="react">
                        <li><i class="fa-regular fa-heart"></i></li>
                        <li><i class="fa-regular fa-comment"></i></li>
                        <li><i class="fa-regular fa-paper-plane"></i></li>
                    </ul>
                </div>
                <div>
                    <ul class="save">
                        <li>
                            <i class="fa-regular fa-bookmark"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="info">
                <p>
                    <b>57 Likes</b>
                </p>
                <p>
                    <b>shinsuchi</b> Don’t give up on your dreams
                </p>
                <p>
                    View all comments
                </p>
                <p>
                    2 DAY AGO
                </p>
            </div>
            <div class="last">
                <div class="emoji">
                    <i class="fa-regular fa-face-surprise"></i>
                    <input type="text" placeholder="Add a comment..."/>
                <p>Post</p>
                </div>
            </div>
        </div>
    </div>
    <div class="non-scrollable">
        <section class="profile-section">
            <div class="profile-section-div">
                <div class="profile">
                    <img class="main-dp" src="{{ Vite::asset('./resources/images/home/dp.jpg') }}" alt="Profile Picture">
                    <p>
                        {{$instagram_clone->username}}
                        <br>
                        {{$instagram_clone->fullname}}
                    </p>
                </div>
                <div class="switch-follow">
                    <p>Switch</p>
                </div>
            </div>
        </section>
        <div class="suggestion-section">
            <div class="suggestion-section-div">
                <div>
                    <p>Suggestions For You</p>
                </div>
                <div>
                    <p>See All</p>
                </div>
            </div>
        </div>
        <div class="follow-section">
            <div class="follow-section-div">
                <div class="follow">
                    <img class="follow-dp" src="{{ Vite::asset('./resources/images/home/follow1.png') }}" alt="Profile Picture"/>
                    <p>nomadev01
                        <br>
                        Followed by deepakprasadsm + 32 more
                    </p>
                </div>
                <div class="switch-follow">
                    <p>Follow</p>
                </div>
            </div>
        </div>
        <div class="follow-section">
            <div class="follow-section-div">
                <div class="follow">
                    <img class="follow-dp" src="{{ Vite::asset('./resources/images/home/follow2.png') }}" alt="Profile Picture">
                    <p>shinsuchi
                        <br>
                        Followed by pandit_koushik + 31 more
                    </p>
                </div>
                <div class="switch-follow">
                    <p>Follow</p>
                </div>
            </div>
        </div>
        <div class="follow-section">
            <div class="follow-section-div">
                <div class="follow">
                    <img class="follow-dp" src="{{ Vite::asset('./resources/images/home/follow3.png') }}" alt="Profile Picture">
                    <p>bionel10
                        <br>
                        Followed by souravdas1707 + 5 more
                    </p>
                </div>
                <div class="switch-follow">
                    <p>Follow</p>
                </div>
            </div>
        </div>
        <div class="follow-section">
            <div class="follow-section-div">
                <div class="follow">
                    <img class="follow-dp" src="{{ Vite::asset('./resources/images/home/follow4.png') }}" alt="Profile Picture">
                    <p>asif_121_m
                        <br>
                        Followed by zid_an_khan + 10 more
                    </p>
                </div>
                <div class="switch-follow">
                    <p>Follow</p>
                </div>
            </div>
        </div>
        <div class="follow-section">
            <div class="follow-section-div">
                <div class="follow">
                    <img class="follow-dp" src="{{ Vite::asset('./resources/images/home/follow5.jpg') }}" alt="Profile Picture">
                    <p>_taslim.zargar
                        <br>
                        Suggested for you
                    </p>
                </div>
                <div class="switch-follow">
                    <p>Follow</p>
                </div>
            </div>
        </div>
    </main>
@include('layouts.footer')
