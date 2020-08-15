<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudViewController extends Controller {
public function challenge(){
$users = User::all();
return view('stud_view',['users'=>$users]);
}
}