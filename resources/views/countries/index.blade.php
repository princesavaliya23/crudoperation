@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Data List</div>
    <div class="card-body">
        @can('create-product')
            <a href="{{ route('countries.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Data</a>
        @endcan
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">S#</th>
                <th scope="col">C_Name</th>
                <th scope="col">Code</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($countries as $countrie)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $countrie->c_name }}</td>
                    <td>{{ $countrie->code }}</td>
                    <td>
                        <form action="{{ route('countries.destroy', $countrie->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('countries.show', $countrie->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                            @can('edit-countrie')
                                <a href="{{ route('countries.edit', $countrie->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                            @endcan

                            @can('delete-countrie')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @empty
                    <td colspan="4">
                        <span class="text-danger">
                            <strong>No data Found!</strong>
                        </span>
                    </td>
                @endforelse
            </tbody>
        </table>

        {{ $countries->links() }}

    </div>
</div>
@endsection