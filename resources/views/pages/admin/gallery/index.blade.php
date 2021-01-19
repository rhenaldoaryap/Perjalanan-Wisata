@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
        <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Title</th>
                            <th>About</th>
                            <th>Main Event</th>
                            <th>Language</th>
                            <th>Food</th>
                            <th>Event Name</th>
                            <th>Meeting Point</th>
                            <th>PAX</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->about }}</td>
                                <td>{{ $item->main_event }}</td>
                                <td>{{ $item->language }}</td>
                                <td>{{ $item->foods }}</td>
                                <td>{{ $item->event_name }}</td>
                                <td>{{ $item->meeting_point }}</td>
                                <td>{{ $item->pax }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('gallery.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
@endsection