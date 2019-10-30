@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center py-5">
        <h2 class="bg-info py-2">Table Test List Laravel</h2>
    </div>

    <div class="py-3 float-right">
        <form class="form-row" action="{{ route('post_phone_route') }}" method="post">
            @csrf
            <div class="col-5">
                <label for="name">Name</label>
                <input type="text" value="" name="name" class="form-control">
            </div>
            <div class="col-5">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" value="" name="origin">
            </div>
            <div class="col-2 d-flex align-items-end">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Origin</th>
            <th scope="col">Created at</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($phone_list as $item)

            <tr>
                <form action="{{ route('post_delete_route', $item->id) }}" method="post">
                    @csrf
                    @method('Delete')
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->origin }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td><button class="btn btn-danger" type="submit">Delete this item</button></td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection