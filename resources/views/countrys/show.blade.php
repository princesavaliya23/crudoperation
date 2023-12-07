@extends('layouts.app')

@section('main')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p>country : <b>{{ $crud->country}}</b></p>
                <p>code : <b>{{ $crud->code }}</b> </p>
                <div class="w-24">
                    <a href="{{route ('countrys.showcountry') }}" class="btn btn-dark btn-sm">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection