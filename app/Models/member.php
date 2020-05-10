<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class member extends Model
{
    protected $table = 'members';
  
    protected $guarded = array('id');
  
    public $timestamps = true;
  
    // 登録を許可するフィールド
    protected $fillable = ['氏名', '出席'];

    public function getData()
    {
      $data = DB::table($this->table)->get();
  
      return $data;
    }

}
