<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class UserController extends Controller
{
    public function show(User $user){
    $user_id = Auth::user()->id;
    $bookings = Booking::get()->where('user_id',"=",$user_id);
    	return view('users.show', compact('user', 'bookings'));
    }
}
