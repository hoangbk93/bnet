<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getApi(){
      return view('postapi');
    }
    public function postApi(Request $request){

        $client = new Client();
        $res = $client->request('POST', 'http://bnetadmin.project/api/articles', [
            'articles' => [
              "id"=>51,
              "title"=> "hoang",
              "body"=> "ngo hoang",
              "created_at"=>"",
              "updated_at"=>"",
            ]
        ]);
    }
}
