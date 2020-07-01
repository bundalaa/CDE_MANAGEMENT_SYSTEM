<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{
//get all users function
    public function getUsers(){
        $users = User::paginate(5);
        return view('admin.user_screen',['users'=>$users]);
    }
//get create user page
    public function createUser(){
        return view('admin.addUser_screen');
    }
//get Latest user function
    public function getLatestUsers(){
        $latestusers = User::all();
        // foreach ($latestusers as $user){
        //     $user->roles;
        // }
        return view('admin.index',['latestusers'=>$latestusers]);
    }

//add user function
    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'role' => 'required',
            // 'avatar'=> 'sometimes','image','mimes:jpg,jpeg,svg,png','max:5000'
        ]);
        // if(request()->has('avatar')){
        //     $avatorUpload = request()->file('avatar');
        //     $avatarName = time() . '.' .$avatorUpload->getClientOriginalExtension();
        //     $avatarPath = public_path('/images');
        //     $avatorUpload->move($avatarPath,$avatarName);
            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = $request['password'];
            $user->role_id = $request['role'];
            // $user->avatar = '/images'.$avatarName;
            $user->save();
        // }
        return redirect('createuser')
        ->with('message','User created successfully');
    }

//changePassword function
public function getChangePassword(){
return view('admin.changePasssword_screen');
}
    public function changePassword(Request $request){
        $rules=[
            'old-pass'=>'required',
            'new-pass'=>'required',
            'confirm-pass'=>'required|same:new-pass'
        ];
        $error_messages=[
            'confirm-pass.same'=>'New  password and confirm password must match'
        ];

        $validator=validator($request->all(),$rules,$error_messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
$user = User::find(auth()->user()->id);
if(Hash::check($request['old-pass'],Auth::User()->password))
          {
$user->password = $request['new-pass'];
$user->save();
return redirect('/')
->with('message','Password changed successfully');
          }
          else
          {
            return redirect()
            ->back()->with('message','You entered wrong password');
          }
    }

    // public function viewEditUser($id){
    //     $user = User::where('id',$id)->first();
    //      return view('admin.editUser_screen',['user'=>$user]);
    // }
//update user function
     public function updateUser($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.editUser_screen',['user'=>$user]);
    }

//edit admn Profile
    public function profile()
    {
        return view('admin.profile_screen');
    }

//update userprofile function
public function updateUserProfile(Request $request)
{
    $users = User::where('id',auth()->user()->id)->first();
    $users->name=$request['name'];
    $users->email=$request['email'];
    $users->save();
    return redirect('profile')
    ->with('message','successfully');
}

    //update avatar
    // public function updateAvatar(Request $request){
    //     $user = User::where('id',auth()->user()->id)->first();
    //     if($request->hasFile('avatar')){
    //         $avatar = $request->file('avatar');
    //         $filename = time() . '.' . $avatar->getClientOriginalExtension();
    //         Image::make($avatar)->resize(300,300)->save( public_path('/images/avatars/' . $filename) );
    //         $user->avatar=$filename;
    //         $user->save();
    //     }
    //     return view('admin.profile_screen');
    //      }

//delete user function
    public function deleteUser($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return Redirect::back()->withErrors('user not found');
        }
        $user->delete();
        return redirect('user-screen')
        ->with('message','User deleted successfully');
    }

}
