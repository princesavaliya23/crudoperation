@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <h3 class="text-muted">Edit #{{ $crud->country }}</h3>
                <div class="card mt-3 p-3 shadow-lg">
                <form method="POST" action="/countrys/{{ $crud->id }}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="name" class="form-control" value="{{( old('name', $crud->country))}}" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Country Code</label>
                        <input type="text" name="code" class="form-control" value="{{( old('code', $crud->code))}}" />
                        @if($errors->has('code'))
                        <span class="text-danger">{{ $errors->first('code')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection