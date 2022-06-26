<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="conteiner mt-2">
        <div class="row">
            <div class="col-lg12">
                <h2>Add Company</h2>
            </div>
        </div>
        <div>
        <a href="{{ route ('companies.index')}}" class="btn btn-primary">Back</a>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        
        @endif
        <form action="{{ route('companies.store')}}" method="POST" enctype="multipart/from-data">
            @csrf
            <div class="col-md12">
                <div class="forn-group mt-3">
                    <strong>Company Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="Company Name">
                    @error('name') 
                    <div class="alert alert-danger">{{$message}}</div>      
                    @enderror  
                </div>      
            </div>
            <div class="col-md12">
                <div class="forn-group mt-3">
                    <strong>Company Email</strong>
                    <input type="email" name="email" class="form-control" placeholder="Company Email">
                    @error('email') 
                    <div class="alert alert-danger">{{$message}}</div>      
                    @enderror  
                </div>      
            </div>
            <div class="col-md12">
                <div class="forn-group mt-3">
                    <strong>Company Address</strong>
                    <input type="text" name="address" class="form-control" placeholder="Company Address">
                    @error('address') 
                    <div class="alert alert-danger">{{$message}}</div>      
                    @enderror  
                </div>      
            </div>
            <div class="col-md12">
                <button type="submit" class="mt-3 btn btn-primary">Submit</button></div>
        </form>
    </div>
    
</body>
</html>