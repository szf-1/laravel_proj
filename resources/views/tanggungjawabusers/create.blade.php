@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Tanggung Jawab</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{ route('tanggungjawabusers.index') }}">Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <form action="{{ route('tanggungjawabusers.store') }}" method="POST">
                @csrf
                
        
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tanggungjawabusers[]" value="membaca" id="membaca">
                    <label class="form-check-label" for="membaca">Membaca</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tanggungjawabusers[]" value="menulis" id="menulis">
                    <label class="form-check-label" for="menulis">Menulis</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="tanggungjawabusers[]" value="mengetik" id="mengetik">
                    <label class="form-check-label" for="mengetik">Mengetik</label>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
