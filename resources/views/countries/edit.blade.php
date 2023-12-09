@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit Countries
                </div>
                <div class="float-end">
                    <a href="{{ route('countries.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                {{-- <form action="{{'route' => ['countries.edit', $countrie->id}}" method="post"> --}}
                    <form action="{{ route('countries.update', $countrie->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="c_name" class="col-md-4 col-form-label text-md-end text-start">c_Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('c_name') is-invalid @enderror" id="c_name" name="c_name" value="{{ $countrie->c_name }}">
                            @if ($errors->has('c_name'))
                                <span class="text-danger">{{ $errors->first('c_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('code') is-invalid @enderror" id="code" name="code">{{ $countrie->code }}</textarea>
                            @if ($errors->has('code'))
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection