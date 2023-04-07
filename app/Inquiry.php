<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
  protected $table = 'inquiry';
  protected $primaryKey = 'id';
  protected $fillable = [
      'school_name', 'school_id', 'vote_id', 'name', 'tel', 'email', 'age', 'body'
     ,'name_child', 'birth' ,'attend'
  ];
}
