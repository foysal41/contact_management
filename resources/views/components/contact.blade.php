
<div class="container mt-4">
    <h1>All Contacts</h1>
    <a href="{{route('contacts.create')}}" class="btn btn-primary mb-3">Create New Contact</a>
    <table class="table table-striped">
        <thead>
            <tr>

                <th>Name</th>
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
                <td>{{  $contact->email}}</td>
                <td>{{  $contact->phone}}</td>
                <td>{{  $contact->address}}</td>
                <td>
                    <a href="#" class="btn btn-info">View</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
           
        </tbody>
    @endforeach
    </table>
</div>




