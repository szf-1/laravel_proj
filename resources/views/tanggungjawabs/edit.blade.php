@extends('layouts.app')

@section('content')
    <h1>Edit Tanggung Jawab</h1>

    <form method="POST" action="{{ route('tanggungjawabs.update', $tanggungjawab->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" name="nama" class="form-control" value="{{ $tanggungjawab->nama }}" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <textarea name="name" class="form-control" required>{{ $tanggungjawab->name }}</textarea>
        </div>
        <div class="form-group">
            <label for="jenis tanggung jawab">jenis_tanggung_jawab:</label>
            <textarea jenis tanggung jawab="jenis tanggung jawab" class="form-control" required>{{ $tanggungjawab->jenis tanggung jawab }}</textarea>
</div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
   


    