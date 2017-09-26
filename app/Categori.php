<?php

namespace App;


use App\Portfolio;
use Illuminate\Database\Eloquent\Model;


class Categori extends Model
{
	protected $fillable = ['name'];
	 

	 public function portfolio()
    {
        return $this->hasMany('App\Portfolio');
    }

     public function remove()
    {
         
   		$this->delete();
   	}
    //
}
