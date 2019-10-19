<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classes;
use Carbon;
use Auth;

class BookingController extends Controller
{
    public function saveClass(Request $request)
    {
    	$data = [
    		'student_id' => Auth::id(),
    		'teacher_id' => $request->teacher,
    		'start_time' => $request->start_time,
    		'end_time' => Carbon::parse($request->start_time)->addHour(2),
    		'status' => 0,
    		'link_call' => 'https://meet.google.com/hep-zacz-dhg',
    	];
    	$class = Classes::create($data);
    	return 1;
    }
}
