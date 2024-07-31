

<div class="container mt-4">
    <h1>Create New Contact</h1>
    <form action="{{ route('contacts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <strong>Email</strong>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <strong>Phone</strong>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <strong>Address</strong>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>