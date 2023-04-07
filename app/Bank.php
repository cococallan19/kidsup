<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
  protected $table = 'banks';
  protected $primaryKey = 'id';
  protected $fillable = ['id', 'status','email','sendid','order_no','tracking_no','acc_name'];
}
