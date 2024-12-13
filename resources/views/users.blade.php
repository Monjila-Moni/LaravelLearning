{{-- <h1>users name: {{$user}}</h1> --}}
{{-- <h1>city name : {{$city}}</h1>  it will show js code as it is, bcz blade prevent xss attack--}}

{{-- <h1>city name : {!!$city!!}</h1> it print js code--}}
<h1>city name: {{!empty($city)? $city:"no city entered"}}</h1>

@foreach($user as $id => $u)
    <h3>{{$id}} | {{$u['name']}} | {{$u['phone']}} | {{$u['city']}} 
        | <a href="{{ Route('viewUser', $id)}}">Show</a>
    </h3>

@endforeach
