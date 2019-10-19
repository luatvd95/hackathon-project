<?php

namespace App\Http\Controllers\User;

use App\Services\ClassService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classes;
use Carbon\Carbon;
use Auth;

class BookingController extends Controller
{

    protected $classService;

    public function __construct(ClassService $classService)
    {
        $this->classService = $classService;
    }

    public function saveClass(Request $request)
    {
        $start = $request->date . ' ' . $request->time . ':00';
    	$data = [
    		'student_id' => Auth::id(),
    		'teacher_id' => $request->teacher,
    		'start_time' => $start,
    		'end_time' => Carbon::parse($start)->addHour(2),
    		'status' => 0,
    		'link_call' => 'https://meet.google.com/hep-zacz-dhg',
            'name' => 'E-learning',
    	];

    	$class = Classes::create($data);
    	return 1;
    }

    public function getListClassByStudentId($studentId)
    {
        $this->classService->getListClassByStudentId($studentId);
    }
}
