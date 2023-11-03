<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>


<div class="container mt-3">
    <h2>List of registered users.</h2>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <div class="row">
                    <div class="col">
                        <th>Name</th>
                    </div>
                    <div class="col">
                        <th>email</th>
                    </div>
                    <div class="col">
                        <th>phone</th>
                    </div>
                    <div class="col">
                        <th>place</th>
                    </div>
                    <div class="col">
                        <th>College</th>
                    </div>
                    <div class="col" id="col6">
                        <th>Description</th>
                    </div>
                    <div class="col">
                        <th>Experience</th>
                    </div>
                    <div class="col">
                        <th>Remove</th>
                    </div>
                </div>
            </tr>

        </thead>
        <tbody>
            @foreach($Registers as $Register)
            <tr>
               
                <td>{{ $Register->name }}</td>
                <td>{{ $Register->phone }}</td>
                <td>{{ $Register->email }}</td>
                <td>{{ $Register->place }}</td>
                <td>{{ $Register->college }}</td>
                <td>{{ $Register->description }}</td>
                <td>{{ $Register->experience }}</td>
                
                <td> 
                <form action="{{ route('delete.register', $Register->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">DELETE</button></td>
                </form>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>

</html>