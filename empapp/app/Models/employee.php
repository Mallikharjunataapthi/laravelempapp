<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
	protected $fillable = ['name', 'designation_id', 'gender',  'image_url','salary','resigned_date','is_exist'];
	
	function designations(){
		return $this->hasOne(designation::class,'id','designation_id','des_name');
	}
}
