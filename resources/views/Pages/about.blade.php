@extends('pages.app')

@section('content')
<h1>About Me</h1>

<h3>People I like:</h3>
<ul>
    @foreach ($people as $person)
        <li>{{$person}}</li>
        @endforeach
</ul>
<p>
    I am a very diligent,honest and nice person.
</p>
@stop