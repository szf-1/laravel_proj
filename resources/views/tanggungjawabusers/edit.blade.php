@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Tanggung Jawab</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tanggungjawabusers.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terdapat beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tanggungjawabusers.update', $tanggungjawabuser->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $tanggungjawabuser->user_id }}" readonly>
        </div>

        <div class="form-group">
            <label for="tanggungjawab">Tanggung Jawab:</label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tanggungjawabusers[]" value="membaca" id="membaca" {{ in_array('membaca', $tanggungjawabuser->nama_tanggung_jawab) ? 'checked' : '' }}>
                <label class="form-check-label" for="membaca">Membaca</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tanggungjawabusers[]" value="menulis" id="menulis" {{ in_array('menulis', $tanggungjawabuser->nama_tanggung_jawab) ? 'checked' : '' }}>
                <label class="form-check-label" for="menulis">Menulis</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tanggungjawabusers[]" value="mengetik" id="mengetik" {{ in_array('mengetik', $tanggungjawabuser->nama_tanggung_jawab) ? 'checked' : '' }}>
                <label class="form-check-label" for="mengetik">Mengetik</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
