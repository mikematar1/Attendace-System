<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function createuser(Request $request){
        $u = new User;
        $u->email=$request->email;
        $u->password=$request->password;
        $u->save();
    }
    function authenticateuser(Request $request){
        $user = User::where("email","=",$request->email);
        if($user!=null){
            if($user->password == $request->password){
                // authentication possible
                return true;
            }
            
        }
        return false;
    }
    function getuser($id){
        return DB::table("users") ->where("id","=",$id);

    }
    function getusers(){
        return User::all();
    }
    public function getcourses($userid){
        $results=DB::select('select * from users,courses,userhascourse where users.id=userhascourse.userid and courses.id=userhascourse.courseid and users.id=?', [$userid]);
        return $results;
    }
    public function giveattendance(Request $request){
        DB::insert('', [1, 'Dayle']);
    }
    public function getstudentattendance(){

    }
    public function getcourseattendance(){

    }

}
