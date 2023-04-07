<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $table = 'reservation';
  protected $primaryKey = 'id';
  protected $fillable = ['name','send_flg','hash_id'];
//  protected $fillable = [
//     'id', 'name', 'tel', 'email', 'age', 'body'
//    ,'event_id', 'school_id', 'school_name'
//    ];
  public function event_schedule()
  {
        return $this->hasOne('App\EventSchedule', 'event_id', 'event_id');
  }

  //付加情報
  public function reservation_meta()
  {
        return $this->hasOne('App\ReservationMeta', 'id', 'id');
  }

}
