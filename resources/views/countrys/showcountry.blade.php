@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="text-right">
            <a href="countrys/create" class="btn btn-dark mt-2">New Country</a>
        </div>

        <table class="table table-hover mt-4">
            <thead class="thead-dark">
              <tr>
                <th>Id</th>
                <th>Country name</th>
                <th>Code</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cruds as $c)
              <tr>
                <td>{{ $c->id}}</td>
                <td><a href="countrys/{{ $c->id }}/show" class="text-dark"> {{ $c->country }}</a></td>
                <td>{{ $c->code }}</td>
                <td>
                  <a href="countrys/{{ $c->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                  <form method="POST" class="d-inline" action="countrys/{{ $c->id }}/delete">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>

    @endsection