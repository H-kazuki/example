<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
	protected $table = 'todo';
	protected $guarded = array('id');

	public function user()
	{
		 return $this->belongsTo('App\User');
	}
}
