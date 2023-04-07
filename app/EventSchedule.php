<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\School;

class EventSchedule extends Model
{
  protected $table = 'event_schedule';
  protected $primaryKey = 'event_id';
  protected $fillable = [
      'date','time','school_id',
      'release_date','status','relational_school','taiken'
    ];
  public function school()
    {
        return $this->belongsTo('App\School');
    }

}
