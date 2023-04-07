<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EventSchedule;

class School extends Model
{
  protected $table = 'schools';
  protected $primaryKey = 'id';
  public $timestamps = true;
  protected $fillable = [
      'status','main-image','sub-image','school_name','number','email',
      'zip','pref','addr01','addr02','addr03','lat','lng','keywords','contents'
      ,'business_start','business_end'
    ];

    public function school_meta()
    {
          return $this->hasMany('App\SchoolMeta','school_id' , 'id');
    }
    public function event_schedule()
    {
          return $this->hasMany('App\EventSchedule','school_id');
//          return $this->hasMany('App\EventSchedule');
    }
    public function scopeOpen($query)
    {
          return $query->where('status','public');
    }
}
