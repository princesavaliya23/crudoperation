@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Data Information
                </div>
                <div class="float-end">
                    <a href="{{ route('countries.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                    <div class="row">
                        <label for="c_name" class="col-md-4 col-form-label text-md-end text-start"><strong>C_Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $countrie->c_name }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $countrie->code }}
                        </div>
                    </div>
            </div>
        </div>
    </div>    
</div>
    
@endsection