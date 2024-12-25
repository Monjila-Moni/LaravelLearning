<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//query builder e kaj krar jnno ai line ta add kra drkr

class UserController extends Controller
{
    //my created functio showUsers()
    public function showUsers()
    {
        $users = DB::table('users')->get();
        //$user = DB::table('users')->where('id',2)->get();
        //return $user; 
            /*ai value k akhn amra browser diyeo dekhte pabo 
            se jnnno showUser() function er akta route create krte hbe
            tbe return krte na caile dd function use kre debuge kra jay, 
            dd er pore jodi kono coe theke thake thaole ta run hoy, 
            aita laravel er nijosso akta function 
            jodi debug er porer line gula cai je run hok tahole dump() function use krte hoy
            */
        //dd($user);
        //dump($user);
        return view('users',['data'=>$users]);

    }

    public function singleUser(string $user_id)
    {
        $user = DB::table('users')->where('id',$user_id)->get();//
        return view('singleuser',['data'=>$user]);
    }

    public function addUser(Request $req)
    {
        $user = DB::table('users')
        ->insert([
            'name' => $req->username,
            'email' => $req->useremail,

            'age' => $req->userage,
            'city' => $req->usercity,
            'created_at' => now(),
            'updated_At' => now()

        ]);

        if($user)
        {

            echo "<h1> Data added successfully</h1>";
            return redirect()->route('userspage');
        }else{
            echo "<h1> Data not added </h1>";
        }
    }

    public function deleteUser($user_id)
    {
        $user = DB::table('users')
                ->where('id', $user_id)
                ->delete();
        return redirect()->route('userspage');

    }
    public function updatePage(string $id){
        // $user = DB::table('users')->where('id',$user_id)->get();
        // return $user; //returns json
        $user = DB::table('users')->find($id); //find returns array
        return view('updatepage',['data'=>$user]);
    }

    public function updateUser(Request $req ,$id){
        $user = DB::table('users')
                        ->where('id', $id)
                        ->update([
                            'name' => $req->username,
                            'email' => $req->useremail,

                            'age' => $req->userage,
                            'city' => $req->usercity
                        ]);

        if($user){

            echo "<h1> Data successfully updated</h1>";
            return redirect()->route('userspage');
        }
        else{
            echo "<h1> Data didn't updated</h1>";
        }
    }

}
