@extends('layouts.app')

@section('content')
            <div class="float-end">
                <a class="btn btn-success btn-sm" href="{{ route('tanggungjawabusers.create') }}"><i class="fa-solid fa-plus"></i> Create Tanggung Jawab</a>
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
            <th scope="col"><span style="color: #000000">Id</span></th>
            <th scope="col"><span style="color: #000000">nama</span></th>
            <th scope="col"><span style="color: #000000">jenis tanggung jawab</span></th>
</thead>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($tanggungjawabusers as $tj)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ date('d/m/Y', strtotime($tj->tanggal)) }}</td>
                <td>{{ $tj->name }}</td>
                <td>{{ date_format($tj->created_at, 'd/m/Y') }}</td>
                <td>
                    <form action="{{ route('tanggungjawabusers.destroy', $tj->id) }}" method="POST">
                   
                         <a class="btn btn-primary btn-sm" href="{{ route('tanggungjawabusers.edit', $tj->id) }}"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                         <a class="btn btn-warning btn-sm" href="{{ route('tanggungjawabusers.show', $tj->id) }}"><i class="fa-regular fa-eye"></i> Show</a>
                            
                        @csrf
                        @method('DELETE')
                   
                         <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection


      

