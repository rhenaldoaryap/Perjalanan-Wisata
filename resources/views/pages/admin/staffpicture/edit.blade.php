@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Staff</h1>
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
            <form action="{{ route('staffpicture.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="galleries_id">Staff</label>
                    <select name="galleries_id" required class="form-control">
                        <option value="{{ $item->galleries_id }}">Pilih Staff</option>
                        @foreach ($galleries as $gallery)
                            <option value="{{ $gallery->id }}">
                                {{ $gallery->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-group" name="image" placeholder="Image">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Ubah
                </button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection