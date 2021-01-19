@extends('layouts.success')

@section('title', 'Gallery Real Project')

@section('content')
<main>
      <section>
        <div class="container">
          <div class="row justify-content-center" style="margin-top: 100px;">
            <div class="card text-center" style="padding: 0">
              <img src="frontend/images/ic_mail.png" alt="mail" />
            </div>
          </div>
          <h5 style="text-align: center; margin-top: 50px;">
            Terima kasih sudah mendukung kami dengan memilih trip/event hasil
            proyek nyata mahasiswa Perjalanan Wisata
            <br />
            <br />
            Segera konfirmasi dan kirim bukti pembayaran untuk memproses dukungan Anda
          </h5>
        </div>
        <section class="d-flex justify-content-center my-lg-0 btn-margin">
            <a href="/" class="btn btn-primary bg-and-button"
              >Home</a
            >
          </section>
      </section>
</main>
@endsection