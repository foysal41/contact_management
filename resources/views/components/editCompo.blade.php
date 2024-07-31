<div class="container mt-4">
    <h1>Edit Contact</h1>
    <form action= "{{ route('contacts.update', $contact->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$contact->name}}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$contact->email}}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{$contact->phone}}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{$contact->address}}">
        </div>
        <button type="submit" class="btn btn-primary"> <a href="{{ route('contacts.show', $contact->id)}}"></a>Update</button>
    </form>
</div>