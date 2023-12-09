@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Data
                </div>
                <div class="float-end">
                    <a href="{{ route('countries.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('countries.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="c_name" class="col-md-4 col-form-label text-md-end text-start">c_Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('c_name') is-invalid @enderror" id="c_name" name="c_name" value="{{ old('c_name') }}">
                            @if ($errors->has('c_name'))
                                <span class="text-danger">{{ $errors->first('c_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">code</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('code') is-invalid @enderror" id="code" name="code">{{ old('code') }}</textarea>
                            @if ($errors->has('code'))
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Data">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection