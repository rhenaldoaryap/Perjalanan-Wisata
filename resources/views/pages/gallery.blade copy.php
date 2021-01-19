@extends('layouts.app')

@section('title', 'Gallery Real Project')

@section('content')
<main>
    <section>
    <div class="container">
        <div class="row gallery-img">
            <div class="col-lg-6 profil">
                <div class="card text-center" style="padding: 0;">
                <img
                    src="{{ url('frontend/images/farmhouse-lembang-bandung.jpg') }}"
                    class="card-img-top"
                    alt="farmhouse-lembang"
                />
                <div class="card-body">
                    <h5 class="card-title">Jawa Barat 3D / 2N</h5>
                    <p class="card-text">
                    Monday Travellab
                    </p>
                    <a href="{{ url('details')}}" target="_blank" class="btn btn-contact">Details</a>
                </div>
                </div>
            </div>
            <div class="col-lg-6 profil">
                <div class="card text-center" style="padding: 0;">
                <img
                    src="{{ url('frontend/images/jogja.jpg') }}"
                    class="card-img-top"
                    alt="jogja"
                />
                <div class="card-body">
                    <h5 class="card-title">Joglo Semar 4D / 3N</h5>
                    <p class="card-text">
                    Tuesday Travellab
                    </p>
                    <a href="{{ url('details') }}" target="_blank" class="btn btn-contact">Details</a>
                </div>
                </div>
            </div>
            <div class="col-lg-6 profil">
                <div class="card text-center" style="padding: 0;">
                <img
                    src="{{ url('frontend/images/nusa-penida.jpg') }}"
                    class="card-img-top"
                    alt="nusa-penida"
                />
                <div class="card-body">
                    <h5 class="card-title">Banyuwangi - Bali - Lombok 8D / 7N</h5>
                    <p class="card-text">
                    Wednesday Travellab
                    </p>
                    <a href="{{ url('details') }}" target="_blank" class="btn btn-contact">Details</a>
                </div>
                </div>
            </div>
            <div class="col-lg-6 profil">
                <div class="card text-center" style="padding: 0;">
                <img
                    src="{{ url('frontend/images/coffee.jpg') }}"
                    class="card-img-top"
                    alt="coffee"
                />
                <div class="card-body">
                    <h5 class="card-title">Coffee Not Kill You</h5>
                    <p class="card-text">
                    MG Company
                    </p>
                    <a href="{{ url('details') }}" target="_blank" class="btn btn-contact">Details</a>
                </div>
                </div>
            </div>
            <div class="col-lg-6 profil">
                <div class="card text-center" style="padding: 0;">
                <img
                    src="{{ url('frontend/images/ecobrick.jpg') }}"
                    class="card-img-top"
                    alt="eco-brick"
                />
                <div class="card-body">
                    <h5 class="card-title">Ecobrick</h5>
                    <p class="card-text">
                    MLT Inc.
                    </p>
                    <a href="{{ url('details') }}" target="_blank" class="btn btn-contact">Details</a>
                </div>
                </div>
            </div>
            <div class="col-lg-6 profil">
                <div class="card text-center" style="padding: 0;">
                <img
                    src="{{ url('frontend/images/forgetwork.jpg') }}"
                    class="card-img-top"
                    alt="forget-work"
                />
                <div class="card-body">
                    <h5 class="card-title">Forget Work!</h5>
                    <p class="card-text">
                    eXT Event Organizer
                    </p>
                    <a href="{{ url('details') }}" target="_blank" class="btn btn-contact">Details</a>
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