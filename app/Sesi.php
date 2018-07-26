<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = 'sesi';

    //tak masuk form ke table
    protected $guarded =['status'];
      //EITHER ONE;salah satu;guarded.or.fillable
       //or yg lalu form
    //protected $fillable = ['name','status','pingat'];
}
