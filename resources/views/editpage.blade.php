<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2>Edit User</h2>
        <form method="POST" action="{{ route('update.register', $Register->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $Register->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ $Register->email }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" value="{{ $Register->phone }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="place">Place:</label>
                <input type="text" name="place" id="place" value="{{ $Register->place }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="college">College:</label>
                <input type="text" name="college" id="college" value="{{ $Register->college }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $Register->description }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="experience">Experience:</label>
                <input type="text" name="experience" id="experience" value="{{ $Register->experience }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="language">Languae:</label>
                <input type="text" name="language" id="language" value="{{ $Register->language }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
