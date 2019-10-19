<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function index()
    {
    	$hours = range(0, 23);
    	$today = Carbon::now()->format('Y-m-d');

    	return view('user.teacher.calendar', compact('hours', 'today'));
    }

    public function update(Request $request)
    {
    	return $request->all();
    }
}
