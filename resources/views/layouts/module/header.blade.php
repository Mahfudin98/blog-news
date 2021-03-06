<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
                    {{-- <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            New York, NY
                        </span>

                        <img class="m-b-1 m-rl-8" src="{{asset('template/images/icons/icon-night.png')}}" alt="IMG">

                        <span>
                            HI 58° LO 56°
                        </span>
                    </span> --}}

                    <a href="#" class="left-topbar-item">
                        About
                    </a>

                    <a href="#" class="left-topbar-item">
                        Contact
                    </a>

                    <a href="#" class="left-topbar-item">
                        Sing up
                    </a>

                    <a href="#" class="left-topbar-item">
                        Log in
                    </a>
                </div>

                <div class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                {{-- <li class="left-topbar">
                    <span class="left-topbar-item flex-wr-s-c">
                        <span>
                            New York, NY
                        </span>

                        <img class="m-b-1 m-rl-8" src="{{asset('template/images/icons/icon-night.png')}}" alt="IMG">

                        <span>
                            HI 58° LO 56°
                        </span>
                    </span>
                </li> --}}

                <li class="left-topbar">
                    <a href="#" class="left-topbar-item">
                        About
                    </a>

                    <a href="#" class="left-topbar-item">
                        Contact
                    </a>

                    <a href="#" class="left-topbar-item">
                        Sing up
                    </a>

                    <a href="#" class="left-topbar-item">
                        Log in
                    </a>
                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                </li>

                <li>
                    <a href="category-01.html">Program</a>
                </li>

                <li>
                    <a href="category-02.html">Pendidikan</a>
                </li>

                <li>
                    <a href="category-01.html">Seni & Budaya</a>
                </li>
            </ul>
        </div>

        <!--  -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="index.html"><img src="{{asset('img/logo.png')}}" width="100px" height="100px" alt="LOGO"></a>
            </div>

            <!-- Banner -->
            <div class="banner-header">
                <a href="https://themewagon.com/themes/free-bootstrap-4-html5-news-website-template-magnews2/"><img src="{{asset('template/images/banner-01.jpg')}}" alt="IMG"></a>
            </div>
        </div>

        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="index.html">
                        <img src="{{asset('template/images/icons/logo-01.png')}}" alt="LOGO">
                    </a>

                    <ul class="main-menu nav justify-content-center">
                        <li class="main-menu-active">
                            <a href="{{ route('index') }}">Home</a>
                        </li>

                        <li class="main-menu-item">
                            <a href="">Olahraga</a>
                        </li>

                        <li class="main-menu-item">
                            <a href="">Pendidikan</a>
                        </li>

                        <li class="main-menu-item">
                            <a href="">Seni & Budaya</a>
                        </li>

                        {{-- <li class="float-right">
                            <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                                <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </div>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
