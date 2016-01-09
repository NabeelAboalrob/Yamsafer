<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model {

	//
	 protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
    ];
        protected $table = 'members';


}
