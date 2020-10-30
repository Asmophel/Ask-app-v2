<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $fillable = [
        'title', 'body', 'users_id','name',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
