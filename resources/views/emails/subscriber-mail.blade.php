@extends('emails.layouts')
@section('content')
<h1>New Message From {{ $site_data->site_title}}</h1>
<div>
    Message:  {!! $content !!}<br/>
</div>
<h3>E-mail: {{$from}}</h3>
    @stop