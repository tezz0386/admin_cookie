@extends('emails.layouts')

@section('content')
    <h1>{{$subject}}</h1>
    <h5>Person Information</h5>
    <div>
        Name: {{$name}} <br/>
        Message:  {{$content}}<br/>
        Email:  {{$email}}<br/>
        Number:  {{$number}}<br/>
        Group Size:  {{$group_size}}<br/>
        Country:  {{$country}}<br/>
    </div>
    <h5>Trips Information</h5>
    <div>
        Trip: {{$trip}} <br/>
        Booking Date:  {{date('d M Y', strtotime($trip_booking_date))}}<br/>
    </div>
    <h3>E-mail: {{$from}}</h3>

@stop