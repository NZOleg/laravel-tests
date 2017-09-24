@extends('app')

@section('content')

    @if ($first == 'Oleg')
        <h1>Hi oleg</h1>
    @else
        <h1>Hi someone</h1>
    @endif


 <h1>About me: {{$first}} </h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur deleniti dolore doloremque, est ex facere inventore ipsam laboriosam maxime molestias natus nesciunt officiis pariatur, provident quaerat quidem temporibus vel.</p>

    @if (count($people))
    <h3>People I like:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    @endif


@stop

@section('footer')
    <script>alert('contact me');</script>

@stop
