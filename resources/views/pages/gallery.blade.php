@extends('layouts.app')

@section('title', 'Gallery Real Project')

@section('content')
<main>
<section class="section-popular-may">
    <div class="container">
        <div class="section-popular-may row justify-content-center">
            @foreach ($items as $item)
            <div class="text-center col-lg-6 profil">
                <div
                    class="card card-may text-center d-flex flex-column"
                    style="background-image: url('{{ $item->pictures->count() ? Storage::url($item->pictures->first()->image) : '' }}'); width: 100%"
                >
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    </p>
                    <a
                        href="{{ route('details', $item->slug) }}"
                        class="btn btn-contact"
                    >
                        See More
                    </a>
                </div>
            </div>
            @endforeach
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