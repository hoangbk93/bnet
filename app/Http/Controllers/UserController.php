<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Person;
use App\Application;
use App\QuyenNguoidung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;


class UserController extends Controller
{
  public function dashboard(){
    return view('backend.dashboard');
  }
  public function view(){
    $data['items'] = Person::get()->all();
    return view('backend.user.view',$data);
  }
  public function getAdd(Request $request){
    $data['apps'] = Application::get()->all();
    $data['rights'] = QuyenNguoidung::get()->all();
    return view('backend.user.add',$data);
  }
  public function postAdd(Request $request){
    $data = $request->all();
    //echo '<pre>'; print_r($data); die;
    $user = new Person;
    $user->name = $data['name'];
    $user->fullname = $data['fullname'];
    $user->email = $data['email'];
    $user->phone_number = $data['phone'];
    $user->id_app = $data['idapp'];
    $user->password = $data['password'];
    $user->level = $data['level'];
    $user->status = $data['status'];
    $user->save();
    return redirect('admin/user/view');
  }
  public function getEdit(){
    return view('backend.user.edit');
  }
  public function postEdit(){
    return view('backend.user.edit');
  }
  public function delete($id){
    Person::find($id)->delete();
    return back();
  }
  public function getLoginsms(){
    return view('loginsms');
  }
  public function postLoginsms(Request $request){
    $sms = $request['sms'];
    $basic  = new \Nexmo\Client\Credentials\Basic('07c1269f', '1N8pQwLnvOVjaFXo');
    $client = new \Nexmo\Client($basic);
    $code = mt_rand(100000,999999);
    session()->put('sms',$code );
    $message = $client->message()->send([
        'to' => '841674117767',
        'from' => 'Nexmo',
        'text' => $code
    ]);
    
    return redirect('loginsmsverify')->with(compact('code'));
  }
  public function getLoginsmsVerify(){
    
    return view('loginsmsverify');
  }
  public function postLoginsmsVerify(Request $request){
    $sms = $request['sms'];
    if ($sms == session()->get('sms')) {
      return redirect('dashboard');
    }else{
      return redirect('loginsmsverify');
    }
  }
  public function logout(){
    return redirect('/');
  }
}
