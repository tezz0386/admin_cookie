@extends('emails.layouts')

@section('content')
    <h1>New Message From {{$name}}</h1>
    <div>
        Name: {{$name}} <br/>
        Message:  {{$content}}<br/>
    </div>
    <h3>E-mail: {{$from}}</h3>

@stop