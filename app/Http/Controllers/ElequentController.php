<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\City;
use App\State;
use App\Post;
use App\Role;
use App\User;
class ElequentController extends Controller
{
    public function onetoone()
    {

        // hasOne  
        $state = State::find(1);
       
        return $state->city;
        // End Has One


        // Belongs to follows
        // $city = City::find(2);
        // return $city->state->name;
        //End Belons to Follows

        // return $city1->city->name;
    }
    public function onetomany()
    {
        //Start one To Many
        $state = State::find(1);
        return $state->citymany;
        // End One To Many
         
       // Start Belongs 
        // $city = City::find(1);
        // return $city->statemany;
       // End Belongs
    }

    public function softdelete()
    {
      
    //    Post::find(3)->delete();
        //   $check = Post::all();
        // restore
        // onlyTrashed
        // withTrashed
        // withoutTrashed
        $trashvalue = Post::onlyTrashed()->restore();
         dd($trashvalue);
       echo 1;
    } 


    public function add_roles()
    {
        $roles = [
            ['name'=>'Admin'],
            ['name'=>'Co-admin'],
            ['name'=>'Teacher'],
            ['name'=>'Student']
        ];
        Role::insert($roles);
        return "Roles are created Successfully";
    }

    public function add_users()
    {
        $user = new User();
        $user->name = 'John1';
        $user->email = 'john1@gmail.com';
        $user->password = encrypt('sec');
        $user->save();
        $roles_ids = [1,2,3];
        $user->roles()->attach($roles_ids);
        return "Roles are created Successfully";
    }

    public function getAlluserbyrole($id)
    {
        $role = Role::find($id);
        $users = $role->users;
        return $users;
    }

    public function getAllrolebyuser($id)
    {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }
}
