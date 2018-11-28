<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  protected $table = 'application';
  // khai bao khoa chinh neu khong khai bao thi mac dinh khoa chinh la 'id'
  protected $primaryKey = 'id';
  //khai bao cac co; can dung de giam thoi gian truy van vao csdl
 // protected $fillable = ['','','',''];
  //tuong tac, truy van voi tat ca cac col
  protected $guarded = [];
  //an mot so truong thong tin, khi can select den thi khong hien thong tin
  protected $hidden = [];
}
