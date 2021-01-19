<script type="text/javascript">
    $(document).ready(function () {
    $(".slider").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [
        {
            breakpoint: 768,
            settings: {
            slidesToShow: 4,
            },
        },
        {
            breakpoint: 520,
            settings: {
            slidesToShow: 2,
            },
        },
        ],
    });
    });
</script>
<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light">
    <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ url('frontend/images/logopw.png') }}" alt="logopw" />
    </a>
    <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navb"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto snavbar">
        <li class="nav-item mx-md-2">
            <a href="{{ url('profil') }}" class="nav-link">Profil</a>
        </li>
        <li class="nav-item mx-md-2">
            <a href="{{ url('kurikulum') }}" class="nav-link">Kurikulum</a>
        </li>
        <li class="nav-item mx-md-2">
            <a href="{{ url('staff') }}" class="nav-link">Staff</a>
        </li>
        <li class="nav-item mx-md-2">
            <a href="https://api.whatsapp.com/send?phone=6281212761825&text=Halo%20Admin%20Perjalanan%20Wisata." target="_blank" class="nav-link">Contact</a>
        </li>
        <li class="nav-item mx-md-2">
            <a href="{{ url('gallery') }}" class="nav-link">Gallery</a>
        </li>
        </ul>

        @guest
            <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">Masuk</button>
            </form>

            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ url('login') }}';">
                Masuk
            </button>
            </form>
        @endguest

        @auth
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
            </form>

            <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                Keluar
            </button>
            </form>
        @endauth
    </div>
    </nav>
</div>