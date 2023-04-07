<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationMeta extends Model
{
  protected $table = 'reservation_meta';
  protected $primaryKey = 'id';
  protected $fillable = ['id','hash_id','gender','english','english_detail'
                        ,'attendance','attendance_detail','start'
                        ,'route','participat_count','participat_detail','other','send_flg'
                        ];
//  protected $fillable = [
//     'id', 'name', 'tel', 'email', 'age', 'body'
//    ,'event_id', 'school_id', 'school_name'
//    ];
  public function reservation()
  {
        return $this->hasOne('App\Reservation', 'id', 'id');
  }
}
