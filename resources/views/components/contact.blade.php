
<div class="container mt-4">
    <h1>All Contacts</h1>
    <a href="{{route('contacts.create')}}" class="btn btn-primary mb-3">Create New Contact</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th><a href="{{ route('contacts.index', ['sort' => 'name']) }}">Name</a></th>
                    <th><a href="{{ route('contacts.index', ['sort' => 'created_at']) }}">Created At</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 0; @endphp
            @foreach ($contacts as $contact)
            <tr >
                <td>{{  $contact->name}}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{  $contact->email}}</td>
                <td>{{  $contact->phone}}</td>
                <td>{{  $contact->address}}</td>
                <td>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
           
        </tbody>
    @endforeach
    </table>
</div>




