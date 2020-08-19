<?php

namespace App\Http\Controllers;

use App\Coordinator;
use App\Role;
use App\Student;
use App\Supervisor;
use App\User;
use Dompdf\Adapter\PDFLib;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;



class UserController extends Controller
{
    public function viewStudents()
    {
        $students = User::whereHas('roles', function ($role) {
            $role->where('name', 'student');
        })->paginate(10);
        foreach($students as $student){
           $student->student;
        }
        return view('admin.students_screen', ['students' => $students]);
    }
    public function viewSupervisors()
    {
        $supervisors = User::whereHas('roles', function ($role) {
            $role->where('name', 'supervisor');
        })->paginate(10);
        return view('admin.supervisors_screen', ['supervisors' => $supervisors]);
    }

    public function viewChallengeOwners()
    {
        $challengeOwners = User::whereHas('roles', function ($role) {
            $role->where('name', 'challengeOwner');
        })->paginate(10);
        return view('admin.challengeOwner', ['challengeOwners' => $challengeOwners]);
    }
    public function viewCoordinators()
    {
        $coordinators = User::whereHas('roles', function ($role) {
            $role->where('name', 'admin');
        })->paginate(10);
        return view('admin.coordinators_screen', ['coordinators' => $coordinators]);
    }
    //get all users function
    public function getUsers()
    {
        $users = User::get();
        foreach ($users as $user) {
            $user->roles;
        }
        return view('admin.user_screen', ['users' => $users]);
    }
    //get create user page
    public function createUser()
    {
        $roles = Role::all();
        /// return response()->json(['roles'=>$roles]);
        return view('admin.addUser_screen', ['roles' => $roles]);
    }
    //get Latest user function
    public function getLatestUsers()
    {
        $latestusers = User::paginate(15);
        foreach ($latestusers as $user) {
            $user->roles->first;
        }
        return view('admin.admin_index', ['latestusers' => $latestusers]);
        // return response()->json(['user'=>$user],201);
    }

    //add user function
    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'role_id' => 'required'
        ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = "12345678";
        $user->save();

        $role = Role::find($request['role_id']);
        if (!$role) {
            return redirect('createuser')
                ->with('message', ' Role not found');
        }
        // has many relationship
        $user->roles()->attach($role);
        switch ($role->name) {
            case 'student':
                $student = new Student();

                $user->student()->save($student);
                break;
            case 'supervisor':
                $supervisor = new Supervisor();

                $user->supervisor()->save($supervisor);
                break;

            case 'coordinator':
                $coordinator = new Coordinator();

                $user->coordinator()->save($coordinator);
                break;

            default:
                # code...

                break;
        }
        return redirect('createuser')
            ->with('message', 'User created successfully');
    }

    //changePassword function
    public function changePassword(Request $request)
    {
        $rules = [
            'old-pass' => 'required',
            'new-pass' => 'required',
            'confirm-pass' => 'required|same:new-pass'
        ];
        $error_messages = [
            'confirm-pass.same' => 'New  password and confirm password must match'
        ];
        $validator = validator($request->all(), $rules, $error_messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::find(auth()->user()->id);
        if (Hash::check($request['old-pass'], Auth::User()->password)) {
            $user->password = $request['new-pass'];
            $user->save();
            return redirect()->back()->with('message', 'Password changed successfully');
        } else {
            return redirect()
                ->back()->with('message', 'You entered wrong password');
        }
    }

    public function getChangePassword()
    {
        return view('admin.changePasssword_screen');
    }

    //update user function
    public function getEditUser($id)
    {
        $roles = Role::all();
        $user = User::where('id', $id)->first();
        return view('admin.editUser_screen', ['user' => $user,'roles' => $roles]);
    }


    //update user
    public function updateUser(Request $request)
    {
        $user = User::where('id', $request['id'])->first();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $role = Role::find($request['role_id']);
        $user->roles()->sync($role);
        $user->save();

        return redirect('adminIndex')->with('message', 'user updated successfully');
    }


    //edit admn Profile
    public function profile()
    {
        return view('admin.profile_screen');
    }

    //update userprofile function
    public function updateUserProfile(Request $request)
    {
        $users = User::where('id', auth()->user()->id)->first();
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->save();
        return redirect('userprofile')
            ->with('message', 'user profile updated successfully');
    }

    //update avatar
    public function updateAvatar(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $user->avatar = $filename;
            $user->save();

            $file = $request->file('avatar');
            $file->move(public_path('/images/avatars/'), $filename);
        }
        return redirect('userprofile');
    }

    //delete user function
    public function deleteUser($userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return Redirect::back()->withErrors('user not found');
        }
        $user->delete();
        return redirect('user-screen')
            ->with('message', 'User deleted successfully');
    }


    ///student module

    public function edit()
    {
        return view('student.stuProfile');

    }
    public function AddProfile(request $request)
    {
      $this->validate($request,[

       'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $user = User::where('id', auth()->user()->id)->first();
      if($request->hasFile('avatar')){
        $avatar=$request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
      $user->avatar=$filename;
      $user->save();
      $file = $request->file('avatar');
      $file->move(public_path('/images/avatars/'), $filename);
      return redirect('stuProfile')->with('response','Profile Added successfully');
      }
      $users = User::where('id', auth()->user()->id)->first();
      $users->name = $request['name'];
      $users->email = $request['email'];
      $users->save();
      return redirect('stuProfile')->with('response', 'successfully edit');
    }
    // public function deletePicture(user $id)
    // {
    //     $user = User::find($id);
    //     if (!$user) {
    //         return Redirect::back()->withErrors('user not found');
    //     }
    //     $user->delete();
    //     return redirect('user-screen')
    //         ->with('message', 'User deleted successfully');
    // }
    public function stupassword(){
        return view('student.studentChangePassword');
    }
    public function ChangeStudent(request $request)
    {
     //validation
     $rules = [
        'old_pass' => 'required',
        'new_pass' => 'required',
        'confirm_pass' => 'required|same:new_pass'
    ];
    $error_messages = [
        'confirm_pass.same' => 'New  password and confirm password must match'
    ];
    $validator = validator($request->all(), $rules, $error_messages);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $user = User::find(auth()->user()->id);
    if (Hash::check($request['old_pass'], Auth::User()->password)) {
        $user->password = $request['new_pass'];
        $user->save();
        return redirect('/password')
            ->with('message', 'Password changed successfully');
    } else {
        return redirect()
            ->back()->with('message', 'You entered wrong password');
    }
}
    //challenge owner
    public function ChallengeOwnerPassword(Request $request)
    {
        // $users = User::where('id', auth()->user()->id)->first();
        // $users->name = $request['name'];
        // $users->email = $request['email'];
        $rules = [
            'old-pass' => 'required',
            'new-pass' => 'required',
            'confirm-pass' => 'required|same:new-pass'
        ];
        $error_messages = [
            'confirm-pass.same' => 'New  password and confirm password must match'
        ];
        $validator = validator($request->all(), $rules, $error_messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::find(auth()->user()->id);
        if (Hash::check($request['old-pass'], Auth::User()->password)) {
            $user->password = $request['new-pass'];
            $user->save();
            return redirect()->back()->with('message', 'Password changed successfully');
        } else {
            return redirect()->back()->with('message', 'You entered wrong password');
        }
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        set_time_limit(0);
        $data = User::all();
        // share data to view
        view()->share('users',$data);

        $pdf = PDF::loadView('admin/userpdf_view', $data);
        // dd($pdf);

        // download PDF file with download method
        return $pdf->download('user_pdf_file.pdf');
      }

}

    






