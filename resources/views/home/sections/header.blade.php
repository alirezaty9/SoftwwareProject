<nav class="navbar navbar-expand-lg costume-nav">
    <div class="container-fluid">
        <a href="{{ route('home.index') }}"><img src="{{ asset('images/logo4.svg') }}"
                class="navbar-brand"></img></a>
        <button class="navbar-toggler p-0 me-3" id="navbarTogglerBtn" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <div id="menu_button">
                <input type="checkbox" id="menu_checkbox">
                <label for="menu_checkbox" id="menu_label">
                    <div id="menu_text_bar"></div>
                </label>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        خدمات
                    </a>
                    <span class="vertical-line"></span>
                    <ul class="dropdown-menu text-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="{{ route('home.services') }}/#video-service">ویدئو</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('home.services') }}/#photo-service">عکس</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('home.services') }}/#website-service">سایت</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('home.services') }}/#design-service">طراحی</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('home.services') }}/#podcast-service">پادکست</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
                                href="{{ route('home.services') }}/#advertise-consultation-service">مشاوره
                                تبلیغاتی</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('home.services') }}/#social-media-service">شبکه
                                های
                                اجتماعی</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
                                href="{{ route('home.services') }}/#advertise-campaign-service">کمپین تبلیغاتی</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item"
                                href="{{ route('home.services') }}/#digital-marketing-service">برندینگ و مارکتینگ</a>
                        </li>
                    </ul>
                </li>
                <span class="vertical-line"></span>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home.order') }}">سفارش آنلاین</a>
                </li>
                <span class="vertical-line"></span>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.projects') }}">نمونه ها</a>
                </li>
                <span class="vertical-line"></span>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.about') }}">درباره ما</a>

                </li>
                <span class="vertical-line"></span>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        بیشتر
                    </a>
                    <ul class="dropdown-menu text-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="#">راه های ارتباطی</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">پادکست به نگاران</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">باشگاه مشتریان</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">فرصت های شغلی</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">همکاری با ما</a></li>
                    </ul>
                </li>

            </ul>
            <div class="navbar-btns">
                {{-- <a href="{{ route('logout') }}" id="addresses-expand" class="primary-btn"><i --}}

                <button id="addresses-expand" class="primary-btn"><i class='bx bx-cart-alt'></i>پیگیری سفارشات
                </button>
                |


                @if (auth()->check())
                    <a class="profile-link"
                        href="{{ route('home.profile') }}"><span>{{ auth()->user()->cellphone }}</span></a>
                @else
                    <a id="logBtn" href="{{ route('home.login') }}" class="btn effect04"
                        data-sm-link-text="ثبت نام">
                        <span><i class='bx bx-log-in-circle'></i>ورود</span></a>
                @endif




            </div>
        </div>
    </div>
</nav>
