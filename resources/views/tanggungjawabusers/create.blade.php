@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="card">
                    <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                <h2>Tanggung Jawab</h2>
            </div>
            {!! Form::open(['route' => 'tanggungjawabusers.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <select class="form-control selectpicker" multiple data-live-search="true">
                <option selected disabled>Open this select menu</option>
                <option value="typing">Typing</option>
                <option value="reading">Reading</option>
                <option value="take">take</option>
                <option value="drawing">Drawing</option>
                
            </select>

            <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success btn-block text-white">Submit</button>
                            </div>
                        </div>
</form>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection

