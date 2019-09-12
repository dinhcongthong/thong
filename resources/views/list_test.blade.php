@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center py-5">
            <h2 class="bg-info py-2">Table Test List Laravel</h2>
        </div>
        
        <a href="{{ route('get_update_route') }}" class="btn btn-primary float-right">Add New</a>
        <table class="table table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Origin</th>
                <th scope="col">Created at</th>
            </thead>
            <tbody>
                @foreach ($phone_list as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->origin }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection