@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Responsibility</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{ route('tanggungjawabs.index') }}"> Back</a>
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
            <form action="{{ route('tanggungjawabs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <strong>id:</strong>
                    <textarea class="form-control" style="height:50px" name="id"
                        placeholder="id"></textarea>
                </div>
                <div class="form-group mb-3">
                    <strong>name:</strong>
                    <textarea class="form-control" style="height:50px" name="id"
                        placeholder="name"></textarea>
                            </span>
                        </div>
                    </div>
                </div>
              
                
            
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" onclick="dclick()" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    

   
@endsection