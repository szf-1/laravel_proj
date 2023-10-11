@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Detail Pekerjaan</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success btn-sm" href="{{ route('pekerjaans.create') }}"><i class="fa-solid fa-plus"></i> Create New pekerjaan</a>
                <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-arrow-left"></i> Back to previous</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-timeout alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"><span style="color: #000000">No</span></th>
            <th scope="col"><span style="color: #000000">Image</span></th>
            <th scope="col"><span style="color: #000000">Detail Pekerjaan</span<</th>
            <th scope="col"><span style="color: #000000">Tanggal</span></th>
            <th scope="col"><span style="color: #000000">Nama User</span></th>
            <th scope="col"><span style="color: #000000">Date Created</span></th>
            <th width="280px">Action</th>
</thead>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($pekerjaans as $pekerjaan)
            <tr>
                <td>{{ $no++ }}</td>
                <td><img src="{{asset('image/' .$pekerjaan->image) }}" width="100px"></td>
                <td>{{ $pekerjaan->detail_pekerjaan }}</td>
                <td>{{ date('d/m/Y', strtotime($pekerjaan->tanggal)) }}</td>
                <td>{{ $pekerjaan->user->name }}</td>
                <td>{{ date_format($pekerjaan->created_at, 'd/m/Y') }}</td>
                <td>
                    <form action="{{ route('pekerjaans.destroy', $pekerjaan->id) }}" method="POST">

                         <a class="btn btn-primary btn-sm" href="{{ route('pekerjaans.edit', $pekerjaan->id) }}"><i class="fa-regular fa-pen-to-square" style="color: white"></i></a>
                         <a class="btn btn-warning btn-sm" href="{{ route('pekerjaans.show', $pekerjaan->id) }}"><i class="fa-regular fa-eye" style="color: white"></i></a>
                            
                        @csrf
                        @method('DELETE')

                         <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><i class="fa-regular fa-trash-can" style="color:white"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $pekerjaans->links() !!}
    </div>

@endsection



      

