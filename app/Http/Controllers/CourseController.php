<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
class CourseController extends Controller
{
		public function __construct()
	{
		$this->middleware('web');
	}
    //
    public function getManageCourse()
    {
    return view('courses.manageCourse');
    }
    public function postInsertAcademic(Request $requst)
    {
    	if($request->ajax())
    	{
    		return response(Academic::create($request->all()));
    	}
    }
 public function postInsertProgram(Request $requst)
    {
    	if($request->ajax())
    	{
    		return response(Program::create($request->all()));
    	}
    }
}
