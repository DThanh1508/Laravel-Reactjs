<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get || DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Danh sách xe</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Model</th>
                    <th scope="col">Make</th>
                    <th scope="col">Produced on</th>
                    <th scope="col">Manufacturer</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td><a href="{{ route('cars.show', $car->id) }}"><img style="height: 50px; width:50px;"
                                    src="/assets/images/{{ $car->image }}" class="rounded float-start"
                                    alt="..."></a></td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->produced_on }}</td>
                        <td><a href="{{ route('cars.edit', $car->id) }}" class="btn edit btn-primary active"
                                data-confirm="Are you sure to edit this item?">EDIT</a></td>
                        <td>
                            <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                {{-- <a href="{{route('cars.delete', $car->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a> --}}
                                {{-- <a href="{{route('cars.delete', $car->id)}}" class="delete btn btn-danger" data-confirm="Are you sure to delete this item?">Delete</a> --}}
                                <button type="submit" onclick="return confirm('Are you sure to delete this item?')"
                                    class="btn delete btn-danger">DELETE</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <strong><a href="{{ route('cars.create') }}">Thêm mới xe</a></strong>
    </div>
    <script src="/assets/js/getDB.js"></script>
</body>

</html>
