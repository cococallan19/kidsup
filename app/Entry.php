<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'parent' , 'age','sns','tel','email','photo' , 'pr'
    ];
}
