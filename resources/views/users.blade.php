<h1>users name: {{$user}}</h1>
{{-- <h1>city name : {{$city}}</h1>  it will show js code as it is, bcz blade prevent xss attack--}}

{{-- <h1>city name : {!!$city!!}</h1> it print js code--}}
<h1>city name: {{!empty($city)? $city:"no city entered"
    
}}</h1>
