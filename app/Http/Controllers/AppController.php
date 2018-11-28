<?php

namespace App\Http\Controllers;
use App\Application;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
  public function view(){
    $data['app'] = Application::get()->all();
    return view('backend.app.view',$data);
  }
  public function getAdd(){
    return view('backend.app.add');
  }
  public function postAdd(Request $request){
    $data = $request->all();
    $app = new Application;
    $app->name = $data['name'];
    $app->key = $data['key'];
    $app->description = $data['description'];
    $app->status = $data['status'];
    $app->save();
    return redirect('admin/app/view');
  }
  public function getEdit(){
    return view('backend.app.edit');
  }
  public function postEdit(){
    return view('backend.app.edit');
  }
  public function delete(){
    return back();
  }
  public function transation(){
    $trans = json_decode(file_get_contents(env('GET_API_URL').':3000/api/system/historian'));

    foreach ($trans as $tran) {
      $transtype = substr($tran->transactionType,33);
      $transtime = $tran->transactionTimestamp;
      $ngay = substr($transtime,8,2);
      $thang = substr($transtime,5,2);
      $nam = substr($transtime,0,4);
      $gio = substr($transtime,11,8);
      $time[] = [
        'ngay'=> $ngay, 'thang'=>$thang,'nam'=>$nam,'gio'=>$gio,'type'=>$transtype,'id'=>$tran->transactionId,
      ];
    }
    //echo '<pre>'; print_r($time); die;
    // $transtime = $trans->transactionTimestamp;
    //print_r(count($data['trans'])); die;
    return view('backend.transation',compact('trans','time'));
  }
  public function report(){
    $urlcd = env('GET_API_URL').':3000/api/Congdan';
    $urlbh = env('GET_API_URL').':3000/api/Hosobaohiem';
    $loginhistory = env('GET_API_URL').':3000/api/system/identities';

    $data['repCD'] = json_decode(file_get_contents($urlcd));
    $data['repBH'] = json_decode(file_get_contents($urlbh));
    $data['replogin'] = json_decode(file_get_contents($loginhistory));

    return view('backend.report',$data);
  }
  public function congtachotich(){
    $url = env('GET_API_URL').':3000/api/';
    $data['tongiaos'] =json_decode(file_get_contents($url.'Matongiao'));
    $data['dantocs'] = json_decode(file_get_contents($url.'Madantoc'));
    // dd($data['dantocs']);
    $dem =0;
    return view('backend.congtachotich', $data, compact('dem'));
  }
  public function postCongtachotich(Request $request){
    $url = env('GET_API_URL').':3000/api/';
    $congdan =json_decode(file_get_contents($url.'Congdan'));
    $dem=0;
    foreach ($congdan as $info) {
      if ($request->gioitinh == $info->Gioitinhcanhan) {
        $dem++;
      }
    }


    return redirect()->back()->with(compact('congdan','dem'));
  }
  public function chitietdientu(){
    // $url = env('GET_API_URL').':3000/api/';
    // $tongiaos =json_decode(file_get_contents($url.'Matongiao'));
    // $dantocs = json_decode(file_get_contents($url.'Madantoc'));
    return view('backend.chitietdientu');
  }
  public function userOnline(){
    return view('backend.useronline');
  }
  public function appOnline(){
    return view('backend.apponline');
  }
}
