<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  protected $table = 'news';
  protected $primaryKey = 'id';
  protected $fillable = [
      'status','main_image','title','category_id','contents','sub_image','mobile_image'
    ];

    public function news_category()
    {
          return $this->hasMany('App\Category', 'category_id' , 'category_id');
    }
}
