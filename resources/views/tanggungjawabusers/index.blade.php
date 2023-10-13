@extends('layouts.app')

@section('content')
    <div class="float-end">
        <a class="btn btn-success btn-sm" href="{{ route('tanggungjawabusers.create') }}">
            <i class="fa-solid fa-plus"></i> Create Tanggung Jawab
        </a>
        <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm">
            <i class="fa-solid fa-arrow-left"></i> Back to previous
        </a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User ID</th> <!-- Menampilkan User ID -->
                <th scope="col">Nama Tanggung Jawab</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($tanggungjawabusers as $tj)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $tj->user->user_id }}</td>
                    <td>{{ $tj->nama_tanggung_jawab }}</td>
                    <td>

                        <a class="btn btn-primary btn-sm" href="{{ route('tanggungjawabusers.edit', $tj->id) }}"><i class="fa-regular fa-pen-to-square" style="color: white"></i></a>
                        <form action="{{ route('tanggungjawabusers.destroy', $tj->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><i class="fa-regular fa-trash-can" style="color:white"></i></button>
                            
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
