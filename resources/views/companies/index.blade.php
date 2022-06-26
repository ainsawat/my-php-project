<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Learning Index</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Laravel 9 Learning Example</h2>

        </div>
    <div>
        <a href="{{ route ('companies.index')}}" class="btn btn-success">Create Companies</a>
        </div>
    @if($message = Session::get('success'))
    <div class="alert alert-success"></div>
    <p>{{ $message }}</p>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Company Name</th>
            <th>Company Email</th>
            <th>Company Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->email}}</td>
                <td>{{$company->address}}</td>
                <td>
                    <form action="{{ route('companies.destroy', $company->id)}}" method="POST">
                        <a href="{{route('companies.edit', $company->id)}}"class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>

            </tr>
        @endforeach
    </table>
    {!! $companies->links('pagination::bootstrap-5')!!}
</body>
</html>