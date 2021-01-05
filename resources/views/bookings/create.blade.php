@extends('layouts.app')

@section('content')
<div class="container">
	<form method="post" action="{{ route ('bookings.store')}}" >
		 @csrf
     <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Event</strong>
                    <select name="event" class="form-control">
                            <option name="swimming">Swimming</option>
                            <option name="golf">Golf</option>
                            <option name="football">Football</option>
                         
                    </select><br>
                </div>  
            </div>
    
         <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Instructor</strong>
                    <select name="instructor" class="form-control">
                        <option name="james">James Smith</option>
                            <option name="terry">Terry Odongo</option>
                            <option name="yoko">Yoko Ono</option>
                    </select><br>
                </div>  
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date</strong>
                <input type="date" class="form-control" name="end_date" placeholder="End Date">
            </div>
        </div>   

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

	</form>
</div>



@endsection