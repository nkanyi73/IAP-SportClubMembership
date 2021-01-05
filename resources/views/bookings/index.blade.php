@extends('layouts.app')

@section('content')
<div class = "container">
@foreach($bookings as $booking)
    <div class = "booking" style="border: 1px solid #000;">
      {{$booking->id}}<br>
      {{$booking->event}}<br>
      {{$booking->instructor_name}}<br>
      {{$booking->created_at}}

        
    </div><br>
@endforeach
</div>

@endsection
