<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  protected $table = 'logs';
  protected $primaryKey = 'id';
  protected $fillable = ['id', 'ip','user_agent'];
}
