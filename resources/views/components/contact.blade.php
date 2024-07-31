@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>All Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Create New Contact</a>

   
    <form method="GET" action="{{ route('contacts.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name or email" value="{{ request('search') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Search</button>
            </div>
        </div>
    </form>

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th><a href="{{ route('contacts.index', ['sort' => 'name', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
                <th><a href="{{ route('contacts.index', ['sort' => 'created_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
