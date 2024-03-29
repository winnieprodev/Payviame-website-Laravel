<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $fillable = [
    	'account_id',
        'user_id',
    ];

    public function account() {

        return $this->belongsTo('App\Account');

    }

    public function user() {

        return $this->belongsTo('App\User');

    }
}
