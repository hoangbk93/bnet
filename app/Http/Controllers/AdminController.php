<?php

namespace App\Http\Controllers;
use App\Admin;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function view(){
    $data['items'] = User::get()->all();
    return view('backend.admin.view',$data);
  }
  public function getAdd(){
    return view('backend.admin.add');
  }
  public function postAdd(Request $request){
    $data = $request->all();
    $add = new Admin;
    $add->name = $data['name'];
    $add->full_name = $data['fullname'];
    $add->email = $data['email'];
    $add->password = $data['password'];
    $add->country_code = $data['country'];
    $add->phone_number = $data['phone'];
    $add->level = $data['level'];
    $add->status = $data['status'];
    $add->save();
    return redirect('admin/admin/view');
  }
  public function getEdit(){
    return view('backend.admin.edit');
  }
  public function postEdit(){
    return view('backend.admin.edit');
  }
  public function delete($id){
    Admin::find($id)->delete();
    return back();
  }
}
