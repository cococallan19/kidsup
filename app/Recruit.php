<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
  protected $table = 'models';
  protected $primaryKey = 'id';
  protected $fillable = ['id', 'plans','name','kana','parents','number','email','image','body'];
}
