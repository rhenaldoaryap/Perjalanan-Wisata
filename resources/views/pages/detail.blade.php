@extends('layouts.checkout')
@section('title', 'Perjalanan Wisata | Details')

@section('content')
<main>
    <section class="section-details-content">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
            <h1>{{ $item->title }}</h1>
            @if($item->pictures->count())
            <div class="gallery">
                <div class="xzoom-container">
                <img
                    class="xzoom"
                    id="xzoom-default"
                    src="{{ Storage::url($item->pictures->first()->image) }}"
                    xoriginal="{{ Storage::url($item->pictures->first()->image) }}"
                />
                </div>
                <div class="xzoom-thumbs">
                    @foreach ($item->pictures as $picture)
                    <a href="{{ Storage::url($picture->image) }}">
                        <img
                        class="xzoom-gallery"
                        src="{{ Storage::url($picture->image) }}"
                        width="153"
                        xpreview="{{ Storage::url($picture->image) }}"
                        />
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
            <h2>Tentang Wisata</h2>
            <p>
                {!! $item->about !!}
            </p>
            <div class="material row border-left">
                <div class="col-md-4">
                <div class="description">
                    <img
                    src="{{ url('frontend/images/ic_event.png') }}"
                    alt="material"
                    class="features-image"
                    />
                    <div class="description">
                    <h3>Event Utama trip/event</h3>
                    <p>{{ $item->main_event }}</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="description">
                    <img
                    src="{{ url('frontend/images/ic_bahasa.png') }}"
                    alt="bahasa"
                    class="features-image"
                    />
                    <div class="description">
                    <h3>Bahasa Utama trip/event</h3>
                    <p>{{ $item->language }}</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="description">
                    <img
                    src="{{ url('frontend/images/ic_food.png') }}"
                    alt="food"
                    class="features-image"
                    />
                    <div class="description">
                    <h3>Makanan Khas trip/event</h3>
                    <p>{{ $item->foods }}</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-details card-right">
            <h2>Deskripsi singkat</h2>
            <hr />
            <h2>Informasi trip/event</h2>
            <table class="product-information">
                <tr>
                <th width="50%" style="font-size: 13px; font-weight: bold;">
                    Nama Tour/Event
                </th>
                <td width="50%" class="text-right" style="font-size: 13px">
                    {{ $item->event_name }}
                </td>
                </tr>
                <tr>
                <th width="50%" style="font-size: 13px; font-weight: bold;">Titik Temu</th>
                <td width="50%" class="text-right" style="font-size: 13px">
                    {{ $item->meeting_point }}
                </td>
                </tr>
                <tr>
                <th width="50%" style="font-size: 13px; font-weight: bold;">
                    PAX
                </th>
                <td width="50%" class="text-right" style="font-size: 13px">
                    {{ $item->pax }}
                </td>
                </tr>
                <tr>
                <th width="50%" style="font-size: 13px; font-weight: bold;">Harga + Unique Code</th>
                <td width="50%" class="text-right" style="font-size: 13px">
                    Rp.{{ $item->price }},{{ mt_rand(500,900)}}/person
                </td>
                </tr>
            </table>
            </div>
            <div class="join-container">
                @auth
                    <a href="{{ route('success') }}" class="btn btn-block btn-purchase mt-3 py-2">Saya sudah bayar</a>
                @endauth
                @guest
                    <a
                        href="{{ route('login') }}"
                        class="btn btn-block btn-purchase mt-3 py-2"
                    >
                        Login or Register to Purchase
                    </a>
                @endguest
            <div class="text-center mt-3">
                <a href="{{ route('gallery')}}" class="text-muted">Batal</a>
            </div>
            </div>
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

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
    $(".xzoom, .xzoom-gallery").xzoom({
        zoomWidth: 500,
        title: false,
        tint: "#333",
        Xoffset: 15,
    });
    });
</script>
@endpush