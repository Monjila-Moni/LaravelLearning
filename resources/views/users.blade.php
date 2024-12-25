<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Record</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>Users info: </h1>
                
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>CITY</th>
                        <th>EMAIL</th>
                        <th>AGE</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $user)
                        <tr class="tr">
                            <td class="td">{{$user->id}}</td>
                            <td class="td">{{$user->name}}</td>
                            <td class="td">{{$user->city}}</td>
                            <td class="td">{{$user->email}}</td>
                            <td class="td">{{$user->age}}</td>
                            <td><a href="{{route('user.view',$user->id)}}" class ="btn btn-primary btn-sm">View</a></td>
                            <td><a href="{{route('user.delete',$user->id)}}" class ="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{route('update.page',$user->id)}}" class ="btn btn-warning btn-sm">Update</a></td>
                        {{-- id ekhan theke route e jabe then route theke controller e jabe --}}
                        </tr>
                    @endforeach
                </table>
                <div class="d-flex justify-content-center">
                    <a href="/newuser" class="btn btn-success btn-sm mb-3">Add new</a>
                  </div>
                  
            </div>
        </div>
    </div>
</body>
</html>

