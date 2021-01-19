@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('gallery.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="main_event">Main Event</label>
                    <input type="text" class="form-control" name="main_event" placeholder="Main Event" value="{{ old('main_event') }}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" placeholder="Language" value="{{ old('language') }}">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{ old('foods') }}">
                </div>
                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" class="form-control" name="event_name" placeholder="Event Name" value="{{ old('event_name') }}">
                </div>
                <div class="form-group">
                    <label for="meeting_point">Meeting Point</label>
                    <input type="text" class="form-control" name="meeting_point" placeholder="Meeting Point" value="{{ old('meeting_point') }}">
                </div>
                <div class="form-group">
                    <label for="pax">Pax</label>
                    <input type="text" class="form-control" name="pax" placeholder="Pax" value="{{ old('pax') }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection