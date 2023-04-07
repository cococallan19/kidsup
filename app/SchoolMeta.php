<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolMeta extends Model
{
  protected $table = 'school_meta';
  protected $primaryKey = 'meta_id';
  public $timestamps = false;
  protected $fillable = [
      'school_id','meta_key','meta_value'
    ];
}
