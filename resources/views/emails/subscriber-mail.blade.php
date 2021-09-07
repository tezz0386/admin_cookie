@extends('emails.layouts')
@section('content')
<h1>New Message From {{__('imperial baking')}}</h1>
<div>
    Message:  {!! $content !!}<br/>
</div>
<h3>E-mail: {{$from}}</h3>
    @stop