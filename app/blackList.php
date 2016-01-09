<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class blackList extends Model {

	//
	 protected $fillable = [
        'user_id',
    ];
        protected $table = 'black_lists';

}
