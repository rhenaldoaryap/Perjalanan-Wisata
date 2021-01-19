@extends('layouts.app')

@section('title', 'Perjalanan Wisata')

@section('content')
<!-- Header -->
<header>
    <section class="hero module-hero">
    <div class="container">
        <h1>
        <span class="line">Perjalanan Wisata</span>
        <br />
        Universitas Negeri Jakarta
        </h1>
        <h3>
        Temukan arti sesungguhnya dari perjalanan
        <br />
        tempa dirimu dengan belajar sambil berwisata ke banyak tempat di
        <strong>Indonesia!</strong>
        </h3>
        <section class="d-flex justify-content-center my-lg-0 btn-margin">
        <a href="#explore" class="btn btn-primary bg-and-button"
            >Explore!</a
        >
        </section>

        <div class="row justify-content-center">
        <div class="col-3 col-md-2">
            <a href="http://www.unj.ac.id/" target="_blank">
            <img
                class="img-fluid logo"
                src="{{ url('frontend/images/unj-logo.png') }}"
                alt="logo-unj"
            />
            </a>
        </div>
        <div class="col-3 col-md-2">
            <a href="{{ url('/') }}">
            <img
                class="img-fluid logo"
                src="{{ url('frontend/images/logopw.png') }}"
                alt="logo-pw"
            />
            </a>
        </div>
        </div>
    </div>
    </section>
</header>

<main>
    <section class="module module--rating">
    <div class="container">
        <div class="row row--rating">
        <div class="col-lg-7 row__rating">
            <div class="row-image">
            <img src="{{ url('frontend/images/rating.png') }}" alt="rating" />
            </div>
        </div>
        <div class="col-lg-5 row__content">
            <h3 class="row-title">Lulusan Terbaik</h3>
            <p class="row-text">
            Kami selalu berusaha memastikan lulusan Perjalanan Wisata
            memiliki keunggulan kompetitif, jeli melihat peluang bisnis, dan
            memiliki sifat <strong>jujur</strong> sehingga menjadi lulusan
            terbaik.
            <br />
            <br />
            Lulusan Perjalanan Wisata tidak hanya disiapkan untuk bisa
            bersaing secara sehat dan kompetitif di dunia industri tetapi
            kami juga menyiapkan setiap mahasiswa agar dapat membuat bisnis
            mereka sendiri sehingga tercipta lebih banyak lapangan pekerjaan
            </p>
        </div>
        </div>
    </div>
    </section>
    <div class="logo-slider">
    <h3 class="lulusan__kami">Lulusan Kami</h3>
    <p style="text-align: center">bekerja di</p>
    <div class="slider">
        <div>
        <a href="https://bayubuanatravel.com/en/" target="_blank">
            <img src="{{ url('frontend/images/bayu-buana.png') }}" alt="bayubuana" />
        </a>
        </div>
        <div>
        <a href="https://www.panorama-jtb.com/" target="_blank">
            <img src="{{ url('frontend/images/panorama-jtb.png') }}" alt="panorama" />
        </a>
        </div>
        <div>
        <a href="https://dwidayatour.co.id/" target="_blank">
            <img
            style="padding-top: 15px"
            src="{{ url('frontend/images/dwidaya-tour.png') }}"
            alt="dwidaya"
            />
        </a>
        </div>
        <div>
        <a href="https://www.avia.travel/" target="_blank">
            <img
            style="height: 55px; padding-top: 10px"
            src="{{ url('frontend/images/logo-aviatour.png') }}"
            alt="aviatour"
            />
        </a>
        </div>
        <div>
        <a href="https://www.his-travel.co.id/" target="_blank">
            <img
            style="height: 55px"
            src="{{ url('frontend/images/his.png') }}"
            alt="his"
            />
        </a>
        </div>
        <div>
        <a href="https://www.goldenrama.com/" target="_blank">
            <img
            style="height: 80px; padding-bottom: 20px"
            src="{{ url('frontend/images/goldenrama.png') }}"
            alt="goldenrama"
            />
        </a>
        </div>
        <div>
        <a href="https://bayubuanatravel.com/en/" target="_blank">
            <img src="{{ url('frontend/images/bayu-buana.png') }}" alt="bayubuana" />
        </a>
        </div>
        <div>
        <a href="https://www.panorama-jtb.com/" target="_blank">
            <img src="{{ url('frontend/images/panorama-jtb.png') }}" alt="panorama" />
        </a>
        </div>
        <div>
        <a href="https://dwidayatour.co.id/" target="_blank">
            <img
            style="padding-top: 15px"
            src="{{ url('frontend/images/dwidaya-tour.png') }}"
            alt="dwidaya"
            />
        </a>
        </div>
        <div>
        <a href="https://www.avia.travel/" target="_blank">
            <img
            style="height: 55px; padding-top: 10px"
            src="{{ url('frontend/images/logo-aviatour.png') }}"
            alt="aviatour"
            />
        </a>
        </div>
        <div>
        <a href="https://www.his-travel.co.id/" target="_blank">
            <img
            style="height: 55px"
            src="{{ url('frontend/images/his.png') }}"
            alt="his"
            />
        </a>
        </div>
        <div>
        <a href="https://www.goldenrama.com/" target="_blank">
            <img
            style="height: 80px; padding-bottom: 20px"
            src="{{ url('frontend/images/goldenrama.png') }}"
            alt="goldenrama"
            />
        </a>
        </div>
    </div>
    </div>
    <div class="logo-slider" style="padding-top: 100px">
    <h3 class="lulusan__kami">Lulusan Kami</h3>
    <p style="text-align: center">membuat bisnis</p>
    <div class="slider">
        <div>
        <a href="http://lalahwatours.co.id/" target="_blank">
            <img
            style="height: 70px"
            src="{{ url('frontend/images/lalahwa.png') }}"
            alt="lalahwa"
            />
        </a>
        </div>
        <div>
        <a
            href="https://www.instagram.com/sunnah.holidays/"
            target="_blank"
        >
            <img
            style="margin-top: -60px"
            src="{{ url('frontend/images/sunnah-holiday.png') }}"
            alt="sunnah-holiday"
            />
        </a>
        </div>
    </div>
    </div>
    <section class="module module--discuss">
    <div class="container">
        <div class="row row--rating">
        <div class="col-lg-7 row__rating">
            <div class="row-image">
            <img src="{{ url('frontend/images/discuss.png') }}" alt="discuss" />
            </div>
        </div>
        <div class="col-lg-5 row__content">
            <h3 class="row-title-discuss">Metode Diskusi</h3>
            <p class="row-text-discuss">
            Kami menggunakan metode diskusi ketika kegiatan perkuliahan
            Metode diskusi sangat efektif digunakan untuk menemukan solusi
            terbaik dari permasalahan yang ada sehingga dapat membantu
            setiap mahasiswa agar mempunyai ketajaman berfikir, banyak sudut
            pandang, menghargai pendapat orang lain serta kejelian untuk
            menemukan solusi.
            <br />
            <br />
            Antara dosen dan mahasiswa saling belajar satu sama lain dan
            tidak ada yang lebih tinggi sehingga dosen dapat memberikan ilmu
            dan pengetahuan yang dimiliki kepada mahasiswa dan mahasiswa
            memberikan pendapat serta sudut pandangnya.
            </p>
        </div>
        </div>
    </div>
    </section>
    <section class="module module-real-project">
    <div class="container" id="real-project">
        <div class="row article">
        <div class="col-lg-6 article__content">
            <div class="article__box">
            <h3 class="row-title-project">Real Project</h3>
            <p class="row-text-project">
                Setiap mahasiswa di jurusan Perjalanan Wisata diwajibkan untuk
                membuat proyek nyata seperti membuat paket tur dengan detail,
                membuat event dengan skala menengah hingga atas, membuat
                analisis tentang segmen pasar yang akan dituju, dan terakhir
                melakukan marketing dan penjualan terhadap proyek nyata yang
                sudah berhasil dibuat sebelumnya oleh mahasiswa.
                <br />
                <br />
                Ketika membuat proyek nyata tetap didampingi dan diawasi oleh
                dosen Perjalanan Wisata agar tujuan yang diingin dicapai
                secara bersama-sama dapat diraih dan tepat sasaran dengan
                harapan setiap mahasiswa mengerti serta paham bagaimana
                caranya membuat produk bisnis yang dicari oleh banyak orang
                dan memiliki banyak peminatnya dan menjual produk tersebut.
            </p>
            </div>
        </div>
        <div class="col-lg-6 article__image">
            <img src="{{ url('frontend/images/realproject.png') }}" alt="realproject" />
        </div>
        </div>
    </div>
    </section>
    <section class="module module--alumni">
    <div class="container">
        <div class="row row--rating">
        <div class="col-lg-7 row__rating">
            <div class="row-image">
            <img
                src="{{ url('frontend/images/ikatanalumni.png') }}"
                alt="ikatan-alumni"
            />
            </div>
        </div>
        <div class="col-lg-5 row__content">
            <h3 class="row-title-alumni">Ikatan Alumni</h3>
            <p class="row-text-alumni">
            Perjalanan Wisata memiliki Ikatan alumni yang kuat sehingga
            dapat menjadi peluang bagus bagi mahasiswa untuk mencari relasi
            dan mendapatkan informasi terbaru tentang dunia industri
            pariwisata.
            <br />
            <br />
            Perjalanan Wisata juga memiliki satu event besar yang bermaksud
            untuk mengumpulkan semua mahasiswa dan alumni yang pernah
            berkuliah di jurusan Perjalanan Wisata. Event besar ini sangat
            bagus untuk semua mahasiswa Perjalanan Wisata karena bisa
            menjadi ruang untuk mencari relasi atau informasi terbaru
            tentang dunia industri dan dunia pariwisata, nama event besar
            tersebut adalah Satu Kasta yang kepanjangan dari Salam Temu
            Keluarga Pariwisata
            </p>
        </div>
        </div>
    </div>
    </section>
    <section class="module module--joinus">
    <div class="container">
        <div class="join-box">
        <h3>
            Buat pengalaman tak terlupakan <br />
            Salam satu keluarga, satu rasa, satu kasta
        </h3>
        <div class="contact" id="explore">
            <a href="https://api.whatsapp.com/send?phone=6281212761825&text=Halo%20Admin%20Perjalanan%20Wisata." class="btn btn-primary">Contact</a>
            <a href="{{ url('profil') }}" class="btn btn-primary">Profil</a>
        </div>
        <h4>
            Need tour package?
            <br />
            Event Organizer?
        </h4>
        <div class="success">
            <a href="{{ url('gallery') }}" class="btn btn-success">Gallery</a>
        </div>
        </div>
    </div>
    </section>

    <!-- Back to top -->
    <a
    id="back-to-top"
    href="#"
    class="btn btn-light btn-lg back-to-top"
    role="button"
    ><i class="fas fa-chevron-up"></i
    ></a>
</main>
@endsection