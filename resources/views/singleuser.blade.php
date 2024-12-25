<h1>User details:</h1>
@foreach ($data as $id=>$user)
<h1>name:{{$user->name}}</h1>
<h1>email:{{$user->email}}</h1>
<h1>city:{{$user->city}}</h1>
<h1>age:{{$user->age}}</h1>
    
@endforeach