<?php

namespace App\Http\Controllers;
use App\QuyenNguoiDung;
use Illuminate\Http\Request;

class QuyenNguoiDungController extends Controller
{
  public function view(){
    $data['items'] = QuyenNguoiDung::get()->all();
    return view('backend.rights.view',$data);
  }
  public function getAdd(){
    return view('backend.rights.view');
  }
  public function postAdd(Request $request){
    $data = $request->all();
    $add = new QuyenNguoiDung;
    $add->name = $data['name'];
    $add->status = $data['status'];
    $add->save();
    return redirect('admin/quyen-nguoi-dung/view');
  }
  public function getEdit(){
    return view('backend.rights.edit');
  }
  public function postEdit(){
    return view('backend.rights.edit');
  }
  public function delete($id){
    QuyenNguoiDung::find($id)->delete();
    return back();
  }
}
