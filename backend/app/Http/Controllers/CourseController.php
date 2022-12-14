<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function addcourse(Request $request){
        $course = new Course;
        $course->course_name = $request->course_name;
        $course->save();
    }
    public function assigncoursetoinstructor(Request $request){
        DB::insert('insert into userhascourse (userid, courseid) values (?, ?)', [$request->userid, $request->courseid]);

    }
    public function addstudenttocourse(Request $request){
        DB::insert('insert into coursehasstudent (courseid, studentid) values (?, ?)', [$request->courseid, $request->studentid]);

    }
    public function getstudents($courseid){
        $results=DB::select('SELECT * FROM students,courses,coursehasstudent WHERE students.id=coursehasstudent.studentid AND courses.id=coursehasstudent.courseid AND courseid=?', [$courseid]);
        return $results;
    }
}
