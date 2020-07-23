<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class PermissionController extends Controller
{
    public function assign(){
        return view('admin.assign_permission');
    }
    public function assign_permission(Request $request ){
    $role = Role::findRoleByName($request->role);
    $page = $request->page;
    $key = $request->key;
    $value = ($request->value == 1) ? true : false;
    $role->permission = [
        $page . '.' .$key => $value
    ];
    $role->save();
    }
}
