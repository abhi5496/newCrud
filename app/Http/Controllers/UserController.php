<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers()
    {
        $users= DB::table('users')
                    ->paginate(6);
                  //  return $users;
    
         return view('allusers',['data'=> $users]);
         
    }
    public function singleUser(string $id)
    {
        $user = DB::table('users')->where('id',$id)->get();
        return view('user',['data'=>$user]);
    }

    public function addUser(Request $request)
    {
        $user = DB::table('users')
                         ->insert( 
                            [
                                'name'=>$request->username,
                                'email'=>$request->useremail,
                                'age'=>$request->userage,
                                'city'=>$request->usercity
                            ],
                         );
                         return redirect('/');       
    }

    public function updatePage(string $id){
        $user = DB::table('users')->find($id);
                   // return $user;

       return view('updateuser',['data'=>$user]);

    }

    public function updateUser( Request $request, $id )
    {
        $user = DB::table('users')
                    ->where('id',$id)
                    ->update([
                        'name'=>$request->username,
                        'email'=>$request->useremail,
                        'age'=>$request->userage,
                        'city'=>$request->usercity
                    ]);
                    return redirect('/');
    }

    public function deleteUser(string $id)
    {
        $user = DB::table('users')
                        ->where('id', $id)
                        ->delete();

        if($user){
            return redirect('/');
                }
    }

    public function deleteAllUser()
    {
        $user = DB::table('users')
                        ->truncate();
    }

    
}
