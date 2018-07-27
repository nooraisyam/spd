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

    //Accessor(Get)
    public function getCreatedAtFormatAttribute()
    {
    	return $this->created_at->format('d M Y');
	}

    //public function getNamaPenuh(){
    	//return $this->title . '' . $this->firstName;
    	//puan nama
    //}
    //mutator
    //public function setFirstNameAttribute($value)
    //{
    	//$this->attributes['first_name'] = strtoupper($value);
    //}

    //controller: UserController.php
    //$user = new User;
    //$user->first_name = $request->first_name;
    //$user-> save();
}
