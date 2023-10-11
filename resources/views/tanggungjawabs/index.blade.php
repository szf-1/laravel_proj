@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Tanggung Jawab</h2>
            </div>
            <div class="float-end">

            </div>  
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
            <th scope="col"><span style="color: #000000">name</span></th>
            <th scope="col"><span style="color: #000000">jenis tanggung jawab</span<</th>
            <th width="280px">Action</th>
</thead>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($tanggungjawabs as $tj)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $id->id }}</td>
                <td>{{ $tj->name }}</td>
                <td>{{$jenis_tanggung_jawab}}</td>
      
                <td>
                    <form action="{{ route('tanggungjawabs.destroy', $tj->id) }}" method="POST">
                   
                         <a class="btn btn-primary btn-sm" href="{{ route('tanggungjawabs.edit', $tj->id) }}"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                         <a class="btn btn-warning btn-sm" href="{{ route('tanggungjawabs.show', $tj->id) }}"><i class="fa-regular fa-eye"></i> Show</a>
                            
                        @csrf
                        @method('DELETE')
                    
                         <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection




