<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
	protected $table = 'programs';
	protected $fillable = ['programs,description'];
	protected $primaryKey = 'program_id';
	public $timestamps = false;
    //
}
