<?php

namespace App;

use App\Categori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
//use App\Http\Controllers\PortfolioController;


class Portfolio extends Model
{
	protected $fillable = ['title','content','image','categori_id'];


	public function uploadImage( $image )
    {
        //$ima = $this->image;
    	//dd($ima);

    	if($image == null) { return ; }
            if($this->image !== null)
            {
                Storage::delete('uploads/'. $this->image);
            }
    	

    	$filename = str_random(10) . '.' . $image->extension();

     	$image->storeAs('uploads', $filename);

     	$this->image = $filename; 

     	$this->save(); 
     
    }



   

    public function edit($fields)
    {
    	

    	$this->fill($fields);

    	$this->save();


    }

    public static function add($filds)
    {
         
    	$portfolio = new static;

        
        
    	$portfolio->fill($filds);

    	$portfolio->save();

    	return $portfolio;
    }

    public function remove()
    {
         if($this->image !== null)
    	   {
            Storage::delete('uploads/' . $this->image);
           }

   		$this->delete();
   	
    }

    public function categori()
    {
        return $this->belongsTo('App\Categori');
    }
    //
}
